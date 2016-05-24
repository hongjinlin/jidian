#custom templates in typo3 backend setup TS
#<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/frontend/private/configuration/typoscript/setup.ts">

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
            default.value = {$page.fluidtemplate.templateRootPath}home.html
            default.insertData = 1

            1=TEXT
            1.value = {$page.fluidtemplate.templateRootPath}home.html
            2=TEXT
            2.value = {$page.fluidtemplate.templateRootPath}onecolumn.html
            3=TEXT
            3.value = {$page.fluidtemplate.templateRootPath}twocolumn.html
        }

        partialRootPath = {$page.fluidtemplate.partialRootPath}
        layoutRootPath = {$page.fluidtemplate.layoutRootPath}
        variables {
            pageTitle = TEXT
            pageTitle.data = page:title

            pageLayout = TEXT
            pageLayout.data = page:layout

            siteTitle = TEXT
            siteTitle.data = TSFE:tmpl|setup|sitetitle

            BASEURL = TEXT
            BASEURL.data = getIndpEnv:TYPO3_SITE_URL

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

            baidukey = TEXT
            baidukey.data = TSFE:TYPO3_CONF_VARS|SEO|baidukey

            beian = TEXT
            beian.data = TSFE:TYPO3_CONF_VARS|FE|beian
        }
    }

    headerData{
        10 = TEXT
        10.value(
            <meta http-equiv="Content-Style-Type" content="text/css" />
            <meta http-equiv="Content-Script-Type" content="type" />
        )
    }

    meta {
        viewport = {$page.meta.viewport}
        robots = {$page.meta.robots}
        google = {$page.meta.google}
        apple-mobile-web-app-capable = {$page.meta.apple-mobile-web-app-capable}
        keywords = {TSFE:TYPO3_CONF_VARS|SEO|keywords}
        keywords.insertData = 1
        keywords.override.field = keywords
        description = {TSFE:TYPO3_CONF_VARS|SEO|description}
        description.insertData = 1
        description.override.field = description
        author = {TSFE:TYPO3_CONF_VARS|SEO|author}
        author.insertData = 1
        author.override.field = author
    }

    includeCSS {
        bootstrap = {$page.includePath.css}bootstrap.min.css
        fontawesome = {$page.includePath.css}font-awesome.min.css
        style = {$page.includePath.css}style.css
        theme = {$page.includePath.css}global.css
        bxslider = {$page.includePath.css}jquery.bxslider.css
        swipebox = {$page.includePath.css}swipebox.css
        animate = {$page.includePath.css}animate.min.css
        video = fileadmin/templates/frontend/public/video/video-js.css
        datetimepicker = {$page.includePath.css}bootstrap-datetimepicker.min.css
        custom = {$page.includePath.css}custom.css
        #printcss = {$page.includePath.css}print.css
        #printcss{
        #    media = print
        #}
    }

    includeJSlibs {
        jquery = {$page.includePath.javascript}jquery.min.js
        theme = {$page.includePath.javascript}bootstrap.min.js
        backstretch = {$page.includePath.javascript}jquery.backstretch.min.js
        bxslider = {$page.includePath.javascript}jquery.bxslider.min.js
        mixitup = {$page.includePath.javascript}jquery.mixitup.min.js
        swipebox = {$page.includePath.javascript}jquery.swipebox.min.js
        video = fileadmin/templates/frontend/public/video/video.js
    }

    includeJSFooterlibs {
        movetop = {$page.includePath.javascript}move-top.js
        easing = {$page.includePath.javascript}jquery.easing.js
        moment = {$page.includePath.javascript}moment.min.js
        datetimepicker = {$page.includePath.javascript}bootstrap-datetimepicker.min.js
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
    #noPageTitle = 2
    pageTitleSeparator = -
    pageTitleSeparator.noTrimWrap = | | |
    linkVars = L
    renderCharset = utf-8
    metaCharset = utf-8
    doctype = html5
    removeDefaultJS = external
    inlineStyle2TempFile = 1
    admPanel = 1
    debug = 0
    cache_period = 43200
    sendCacheHeaders = 0
    intTarget =
    extTarget =
    disablePrefixComment = 1
    index_enable = 1
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
                override.data = TSFE:TYPO3_CONF_VARS|FE|baseURL
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

#Menu TS
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/frontend/private/configuration/pagets/menu.ts">
#Plugin TS
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/frontend/private/configuration/pagets/plugin.ts">
#Language TS
<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/frontend/private/configuration/pagets/language.ts">

#Domain
domain = TEXT
domain.data = GETINDPENV:TYPO3_HOST_ONLY

#allow html tag in header
lib.stdheader.10.setCurrent.htmlSpecialChars = 0
tt_content.header.20.htmlSpecialChars=0

tt_content.stdWrap.innerWrap.cObject{
    99 =< tt_content.stdWrap.innerWrap.cObject.default
    99.20.10.value = container
}

[globalVar = TSFE:id = 1]
    config.noPageTitle = 1
[end]

###########################
#### LIB PARSEFUNC RTE ####
###########################
lib.parseFunc_RTE {
    externalBlocks {
        blockquote.callRecursive.tagStdWrap.HTMLparser.tags.blockquote.overrideAttribs >
        table {
            stdWrap {
                HTMLparser.tags.table {
                    fixAttrib >
                    fixAttrib {
                        class {
                            always = 1
                            prefixRelPathWith = table###SPACE###
                        }
                    }
                }
                wrap = <div class="table-responsive">|</div>
            }
        }
    }
    nonTypoTagStdWrap.encapsLines {
        addAttributes.P.class >
    }
}

#######################
#### CTYPE: BULLET ####
#######################
tt_content.bullets.20.dataWrap >
tt_content.bullets.20.dataWrap.cObject = CASE
tt_content.bullets.20.dataWrap.cObject {
    key.field = layout
    default = COA
    default {
        10 = TEXT
        10 {
            value = <ul
        }
        20 = COA
        20 {
            10 = TEXT
            10 {
                value = list
                required = 1
                noTrimWrap = || |
            }
            stdWrap {
                trim = 1
                noTrimWrap = | class="|"|
                required = 1
            }
        }
        30 = TEXT
        30 {
            value = >|</ul>
        }
    }

    110 =< tt_content.bullets.20.dataWrap.cObject.default
    110.10.value = <ol
    110.30.value = >|</ol>
    120 =< tt_content.bullets.20.dataWrap.cObject.default
    120.20.10.value = list list-unstyled
    130 =< tt_content.bullets.20.dataWrap.cObject.default
    130.20.10.value = list list-inline
}

#######################
#### Sitemap ####
#######################
tt_content.menu.20.2.stdWrap.outerWrap = <div class="csc-sitemap">|</div>

#######################
#### Table ####
#######################
tt_content.table.20.stdWrap.outerWrap = <div class="table-responsive">|</div>