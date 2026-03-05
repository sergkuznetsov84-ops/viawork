import os, re, json
root = os.path.abspath(os.path.join(os.path.dirname(__file__), '..'))
getmessage_re = re.compile(r'GetMessage\(["\']([A-Z0-9_]+)["\']\)')
mess_re = re.compile(r'\$MESS\s*\[\s*["\']([A-Z0-9_]+)["\']\s*\]')
used = set()
ru_defs = set()
en_defs = set()
for dirpath, dirs, files in os.walk(root):
    for fn in files:
        path = os.path.join(dirpath, fn)
        try:
            with open(path, 'r', encoding='utf-8', errors='ignore') as f:
                s = f.read()
        except Exception:
            continue
        for m in getmessage_re.finditer(s):
            used.add(m.group(1))
        if os.path.sep + 'lang' + os.path.sep in path.replace('\\','/'):
            if path.replace('\\','/').lower().endswith('/ru/template.php') or '/lang/ru/' in path.replace('\\','/') or path.replace('\\','/').endswith('/ru/.parameters.php'):
                for m in mess_re.finditer(s):
                    ru_defs.add(m.group(1))
            if path.replace('\\','/').lower().endswith('/en/template.php') or '/lang/en/' in path.replace('\\','/') or path.replace('\\','/').endswith('/en/.parameters.php'):
                for m in mess_re.finditer(s):
                    en_defs.add(m.group(1))
missing = sorted(list(used - ru_defs))
# also keys defined in en but not ru
en_only = sorted(list(en_defs - ru_defs))
report = {
    'used_getmessage_count': len(used),
    'ru_defs_count': len(ru_defs),
    'en_defs_count': len(en_defs),
    'missing_used_keys_in_ru': missing,
    'en_keys_missing_in_ru': en_only
}
out = os.path.join(root, 'i18n_missing_report.json')
with open(out, 'w', encoding='utf-8') as f:
    json.dump(report, f, ensure_ascii=False, indent=2)
print('Report written to', out)
print('Used GetMessage keys:', len(used))
print('ru defs:', len(ru_defs), 'en defs:', len(en_defs))
print('Missing keys (used but no ru definition):', len(missing))
print('EN-only keys (defined in en but not ru):', len(en_only))
