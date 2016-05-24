#custom templates in typo3 backend setup TS
#<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/backend/private/configuration/typoscript/setup.ts">

###########################
#### CONTENT RENDERING ####
###########################
#  99  = footer links
#################
lib.dynamicContent = COA
lib.dynamicContent {
    5 = LOAD_REGISTER
    5  {
        colPos.cObject = TEXT
        colPos.cObject {
            value.current = 1
            ifEmpty = 0
        }
    }
    20 < styles.content.get
    20.select.where = colPos={register:colPos}
    20.select.where.insertData = 1
}
lib.dynamicContentSlide < lib.dynamicContent
lib.dynamicContentSlide.20.slide = -1

##############
#### PAGE ####
##############
page = PAGE
page {
    typeNum = 0
    shortcutIcon = {$page.favicon.file}

    // Abuse headTag to set X-UA-Compatible the original headTag will be set in config.htmlTag_stdWrap
    // This is sadly needed to get automatic baseurl setting to work
    headTag = <meta http-equiv="X-UA-Compatible" content="{$page.meta.compatible}">

    10 = FLUIDTEMPLATE
    10 {
        file.stdWrap.cObject = CASE
        file.stdWrap.cObject {
            key.data = levelfield:-1, backend_layout_next_level, slide
            key.override.field = backend_layout

            default = TEXT
            default.value = {$page.fluidtemplate.templateRootPath}main.html
            default.insertData = 1

            4=TEXT
            4.value = {$page.fluidtemplate.templateRootPath}login.html
        }

        partialRootPath = {$page.fluidtemplate.partialRootPath}
        layoutRootPath = {$page.fluidtemplate.layoutRootPath}
        variables {
            pageTitle = TEXT
            pageTitle.data = page:title

            pageId = TEXT
            pageId.data = page:uid

            siteTitle = TEXT
            siteTitle.data = TSFE:tmpl|setup|sitetitle

            BASEURL = TEXT
            BASEURL.value = {$config.baseURL}

            rootPage = TEXT
            rootPage.data = leveluid:0

            logoFile = TEXT
            logoFile.value = {$page.logo.file}
            logoHeight = TEXT
            logoHeight.value = {$page.logo.height}
            logoWidth = TEXT
            logoWidth.value = {$page.logo.width}

            bannerFile = TEXT
            bannerFile.data = page:media

            themeCopyright = TEXT
            themeCopyright.value = {$page.theme.copyright.enable}
            themeCopyrightText = TEXT
            themeCopyrightText.data = date:U
            themeCopyrightText.strftime = %Y
            themeCopyrightText.wrap = &copy;|. {$page.theme.copyright.text}

            sys_language_uid = TEXT
            sys_language_uid.data = TSFE:sys_language_uid

            searchKeyword = TEXT
            searchKeyword.data = GP:tx_indexedsearch|sword
        }
    }

    headerData{
        10 = TEXT
        10{
            value = <title>{page:title}&#32;-&#32;极益NGO系统 v1.2</title>
            insertData = 1
        }
        20 = TEXT
        20.value(
            <meta http-equiv="Content-Style-Type" content="text/css" />
            <meta http-equiv="Content-Script-Type" content="type" />
        )
    }

    meta {
        viewport = {$page.meta.viewport}
        robots = {$page.meta.robots}
        google = {$page.meta.google}
        apple-mobile-web-app-capable = {$page.meta.apple-mobile-web-app-capable}
        description = {$page.meta.description}
        description.override.field = description
        author = {$page.meta.author}
        author.override.field = author
        keywords = {$page.meta.keywords}
        keywords.override.field = keywords
    }

    includeCSS {
        bootstrap = {$page.includePath.css}bootstrap.min.css
        fontawesome = {$page.includePath.css}font-awesome.min.css
        animateanimo = {$page.includePath.css}animate-animo.css
        csspinner = {$page.includePath.css}csspinner.min.css
        app = {$page.includePath.css}app.css
        select2 = {$page.includePath.css}select2.min.css
        datetimepicker = {$page.includePath.css}bootstrap-datetimepicker.min.css
        theme = {$page.includePath.css}beadmin-theme-b.css
        global = {$page.includePath.css}global.css
        #printcss = {$page.includePath.css}print.css
        #printcss{
        #    media = print
        #}
    }

    includeJSlibs {
        jquery = {$page.includePath.javascript}jquery.min.js
        bootstrap = {$page.includePath.javascript}bootstrap.min.js
        modernizr = {$page.includePath.javascript}modernizr.js
        fastclick = {$page.includePath.javascript}fastclick.js
    }

    includeJSFooterlibs {
        chosen = {$page.includePath.javascript}chosen.jquery.min.js
        bootstrapslider = {$page.includePath.javascript}bootstrap-slider.js
        bootstrapfilestyle = {$page.includePath.javascript}bootstrap-filestyle.min.js
        animo = {$page.includePath.javascript}animo.min.js
        sparkline = {$page.includePath.javascript}jquery.sparkline.min.js
        slimscroll = {$page.includePath.javascript}jquery.slimscroll.min.js
        storejson2 = {$page.includePath.javascript}store-json2.min.js
        screenfull = {$page.includePath.javascript}screenfull.min.js
        select2 = {$page.includePath.javascript}select2.min.js
        moment = {$page.includePath.javascript}moment.min.js
        datetimepicker = {$page.includePath.javascript}bootstrap-datetimepicker.min.js
        cookie = {$page.includePath.javascript}jquery.cookie.js
        app = {$page.includePath.javascript}app.js
        common = {$page.includePath.javascript}common.js
    }
}

page.includeLibs.common = fileadmin/scripts/common.php

page.headerData.998 >

#############################################
#### INCLUDE RESPOND JS FOR IE DINOSAURS ####
#############################################
[browser = msie] && [version =< 9]
page.includeJSlibs.html5 = {$page.includePath.javascript}html5.js
page.includeJSFooterlibs.respond = {$page.includePath.javascript}respond.min.js
#page.includeCSS.ie8 = {$page.includePath.css}ie8.css
config.htmlTag_setParams = class="ie8"
[end]

################
#### CONFIG ####
################
config {
    no_cache = {$config.no_cache}
    uniqueLinkVars = 1
    pageTitleFirst = 1
    noPageTitle = 2
    linkVars = L
    renderCharset = utf-8
    metaCharset = utf-8
    doctype = html5
    removeDefaultJS = external
    inlineStyle2TempFile = 1
    admPanel = 0
    debug = 0
    cache_period = 43200
    sendCacheHeaders = 0
    intTarget =
    extTarget =
    disablePrefixComment = 1
    index_enable = 0
    index_externals = 1
    headerComment = {$config.headerComment}

    // Set the headTag again and get an automatic baseURL if config.baseURL is not set
    htmlTag_stdWrap {
        setContentToCurrent = 1
        cObject = COA
        cObject {
            10 = LOAD_REGISTER
                10 {
                    newLine.char = 10
                    tagEnd {
                    current = 1
                    split.max = 2
                    split.token = <html
                    split.returnKey = 1
                }
            }

            20 = TEXT
            20 {
                value = <html {register:tagEnd}
                wrap = |{register:newLine}
                insertData = 1
            }

            30 < .20
            30.value = <head>
            40 = TEXT
            40 {
                data = getIndpEnv:TYPO3_SITE_URL
                override = {$config.baseURL}
                wrap = <base href="|">{register:newLine}
                insertData = 1
            }
        }
    }

    // Enable RealUrl
    tx_realurl_enable = 1
    simulateStaticDocuments = 0

    // Disable Image Upscaling
    noScaleUp = 1

    // Compression and Concatenation of CSS and JS Files
    compressJs = {$config.compressJs}
    compressCss = {$config.compressCss}
    concatenateJs = {$config.concatenateJs}
    concatenateCss = {$config.concatenateCss}
}

#allow html tag in header
lib.stdheader.10.setCurrent.htmlSpecialChars = 0
tt_content.header.20.htmlSpecialChars=0

#Menu TS
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/backend/private/configuration/pagets/menu.ts">
#Plugin TS
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/backend/private/configuration/pagets/plugin.ts">
#Language TS
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/backend/private/configuration/pagets/language.ts">