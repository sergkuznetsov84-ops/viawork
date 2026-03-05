jQuery(document).ready(function($){let searchTimeout;const searchInput=$('.search-input-dropdown');const searchSuggestions=$('.search-suggestions');const suggestionsList=searchSuggestions.find('ul');const titleElement=searchSuggestions.find('.title h4');const originalTitle=titleElement.text();if(!$('#search-spinner-styles').length){$('<style id="search-spinner-styles">').text(`
      @keyframes search-spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
      .search-spinner {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid #f3f3f3;
        border-top: 2px solid #0a4195;
        border-radius: 50%;
        animation: search-spin 1s linear infinite;
        margin-right: 8px;
      }
      .search-loading {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
        font-size: 14px;
        color: #666;
      }
    `).appendTo('head')}
function showLoading(){titleElement.html('<div class="search-loading"><span class="search-spinner"></span>Aranıyor...</div>');suggestionsList.empty();searchSuggestions.show()}
function hideLoading(){titleElement.text(originalTitle);searchInput.removeClass('loading')}
function hideSuggestions(){searchSuggestions.hide();hideLoading()}
function performSearch(query){$.ajax({url:nurus_ajax.ajax_url,type:'POST',data:{action:'nurus_ajax',action_name:'search_suggestions',security:nurus_ajax.nonce,data:{query:query}},beforeSend:function(){searchInput.addClass('loading')},success:function(response){hideLoading();if(response.success&&response.data.suggestions){suggestionsList.html(response.data.suggestions);searchSuggestions.show()}else{hideSuggestions()}},error:function(xhr,status,error){console.error('Arama isteği başarısız:',error);hideSuggestions()}})}
searchInput.on('input',function(){const query=$(this).val().trim();clearTimeout(searchTimeout);if(query.length===0){hideSuggestions();return}
showLoading();searchTimeout=setTimeout(function(){performSearch(query)},300)});$('.header-main form').on('submit',function(e){e.preventDefault();const query=searchInput.val().trim();if(query.length>0){const searchUrl=`${nurus_ajax.site_url}?s=${encodeURIComponent(query)}`;window.location.href=searchUrl}});searchSuggestions.on('click','li a',function(e){e.preventDefault();const selectedText=$(this).find('span').text().trim();const permalink=$(this).attr('href');searchInput.val(selectedText);hideSuggestions();if(permalink&&permalink!=='#'){window.location.href=permalink}else{const searchUrl=`${nurus_ajax.site_url}?s=${encodeURIComponent(selectedText)}`;window.location.href=searchUrl}});$(document).on('click',function(e){if(!$(e.target).closest('.search-input-dropdown, .search-suggestions').length){hideSuggestions()}});$(document).on('keydown',function(e){if(e.keyCode===27){hideSuggestions()}})})