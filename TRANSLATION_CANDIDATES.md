Summary

- Scan: searched repository for quoted strings containing Latin letters — found 200+ matches (cap reached).

Top locations with English labels found

- Root menu files: .bottom_section.menu.php, .bottom_resources.menu.php, .bottom_product.menu.php, .bottom_about.menu.php, .top.menu.php
- Includes: include/*.php (footer/links/schedule/etc.)
- Templates: local/templates/viawork/* (footer, header, components)
- Pages: cookie_settings/index.php (contains long text and links)
- Components and JS: local/templates/viawork/components/** and site JS files

Guidelines for automatic changes

- SAFE to translate automatically:
  - Visible menu labels and link titles (in menu files like .top.menu.php and .bottom_*.menu.php)
  - Hard-coded headings and short UI strings in template and include PHP files (e.g. footer headings, subscribe block)
  - Language files under local/templates/viawork/lang — add Russian `$MESS` entries and replace GetMessage usages

- DO NOT automatically translate:
  - URLs, file paths, filenames, slugs, brand/product names (e.g. Spring, Calma), and machine-readable strings
  - External URLs and policy/legal texts pulled from other domains without review
  - Image assets that contain text — require graphic edits
  - Anything that looks like code, keys, or JSON structure

Recommendations / next steps

1) Apply safe translations in small batches (menu files, includes, footer template, language files). Commit to branch `i18n-remaining-ru`.
2) Run repo-wide check for remaining Latin strings (exclude URLs and filenames) and review manual items.
3) For admin-managed content (Bitrix menus, infoblock content): update via Bitrix admin UI on the production/staging server.
4) Deploy: on server run:

```
cd /path/to/site
git fetch origin --prune
git reset --hard origin/main
rm -rf bitrix/cache/* bitrix/managed_cache/* bitrix/html_pages/*
# reload php-fpm or clear opcache as appropriate
```

Notes

- I will proceed with automated, safe edits to menu and include files next (one file at a time, commit each batch).
- For long legal pages (cookie/policy) I will not translate without approval; these contain legal phrasing and external links.

If you want — я могу сразу начать массовые безопасные исправления (menu/includes/footer/lang), затем закоммитить в `i18n-remaining-ru` и запушить. Если согласны, подтверждайте, и я продолжу.