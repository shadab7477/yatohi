<div class="lang-switcher-pill notranslate" style="display: inline-flex; align-items: center; background: rgba(0,0,0,0.06); padding: 3px; border-radius: 20px; margin-right: 15px; vertical-align: middle;">
  <a href="{{ route('lang.switch', 'en') }}" 
     onclick="switchSiteLanguage(event, 'en')" 
     class="btn-lang-toggle btn-lang-en" 
     style="display: inline-block; padding: 4px 12px; border-radius: 16px; font-size: 13px; font-weight: 600; text-decoration: none; transition: all 0.2s ease; {{ app()->getLocale() == 'en' ? 'background: #ED2C2B; color: #ffffff !important; box-shadow: 0 2px 6px rgba(237,44,43,0.3);' : 'color: #333333 !important;' }}">
    EN
  </a>
  <a href="{{ route('lang.switch', 'hi') }}" 
     onclick="switchSiteLanguage(event, 'hi')" 
     class="btn-lang-toggle btn-lang-hi" 
     style="display: inline-block; padding: 4px 12px; border-radius: 16px; font-size: 13px; font-weight: 600; text-decoration: none; transition: all 0.2s ease; {{ app()->getLocale() == 'hi' ? 'background: #ED2C2B; color: #ffffff !important; box-shadow: 0 2px 6px rgba(237,44,43,0.3);' : 'color: #333333 !important;' }}">
    हिन्दी
  </a>
</div>
