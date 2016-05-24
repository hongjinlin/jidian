#login
plugin.tx_felogin_pi1{
    templateFile = fileadmin/templates/backend/plugin/felogin/template.html
    feloginBaseURL = TEXT
    feloginBaseURL.data = getIndpEnv:TYPO3_SITE_URL
}

#power mail
plugin.tx_powermail.view{
    templateRootPaths.0 = fileadmin/templates/backend/plugin/powermail/Templates/
    templateRootPaths.1 = fileadmin/templates/backend/plugin/powermail/Templates/
    partialRootPaths.0 = fileadmin/templates/backend/plugin/powermail/Partials/
    partialRootPaths.1 = fileadmin/templates/backend/plugin/powermail/Partials/
    layoutRootPaths.0 = fileadmin/templates/backend/plugin/powermail/Layouts/
    layoutRootPaths.1 = fileadmin/templates/backend/plugin/powermail/Layouts/
}

page.includeJSFooterlibs.powermailJQuery>