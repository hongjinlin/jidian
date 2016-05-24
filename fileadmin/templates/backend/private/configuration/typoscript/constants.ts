############
### PAGE ###
#<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/backend/private/configuration/typoscript/constants.ts">
############
page {
    logo {
        # cat=custom: basic/110/file; type=string; label=Logo: Leave blank to use website title from template instead
        file = fileadmin/templates/backend/public/images/logo.png
        # cat=custom: basic/110/height; type=int+; label=Height: The image will not be resized!
        height =
        # cat=custom: basic/110/width; type=int+; label=Width: The image will not be resized!
        width =
    }

    favicon{
        # cat=custom: basic/110/file; type=string; label=Favicon: favicon icon
        file = fileadmin/templates/backend/public/images/favicon.ico
    }

    theme {
        # cat=custom: basic/160/110; type=boolean; label=Breadcrumb: Enable to display the breadcrumb
        breadcrumb = 1
        copyright {
            # cat=custom: basic/160/120; type=boolean; label=Copyright: Enable to display the copyright
            enable = 1
            # cat=custom: basic/160/121; type=string; label=Copyright Text
            text =
        }
    }

    fluidtemplate {
        # cat=custom: advanced/100/100; type=string; label=Layout Root Path: Path to layouts
        layoutRootPath = fileadmin/templates/backend/private/layouts/
        # cat=custom: advanced/100/110; type=string; label=Partial Root Path: Path to partials
        partialRootPath = fileadmin/templates/backend/private/partials/
        # cat=custom: advanced/100/120; type=string; label=Template Root Path: Path to templates
        templateRootPath = fileadmin/templates/backend/private/templates/
    }

    includePath {
        # cat=custom: advanced/130/100; type=string; label=Css Include Path: Path to css files
        css = fileadmin/templates/backend/public/css/
        # cat=custom: advanced/130/120; type=string; label=JavaScript Include Path: Path to css files
        javascript = fileadmin/templates/backend/public/js/
    }

    meta {
        # cat=custom: basic/120/100; type=string; label=Description: Enter a short description of the page. It will be displayed in the result lists of most search engines.
        description =
        # cat=custom: basic/120/110; type=string; label=Author: Enter the page author's name.
        author =
        # cat=custom: basic/120/120; type=string; label=Keywords: Enter keywords for the page separated by commas. You may also use short phrases.
        keywords =
        # cat=custom: advanced/120/100; type=string; label=viewport
        viewport = width=device-width, initial-scale=1
        # cat=custom: advanced/120/110; type=string; label=robots
        robots = noindex
        # cat=custom: advanced/120/120; type=string; label=apple-mobile-web-app-capable
        apple-mobile-web-app-capable = no
        # cat=custom: advanced/120/130; type=string; label=compatible
        compatible = IE=edge,chrome=1
        # cat=custom: advanced/120/140; type=string; label=google
        google = notranslate
    }
}

##############
### CONFIG ###
##############
config {
    # cat=custom: advanced/150/100; type=string; label=BaseURL: This will override the default automatic BaseURL determination
    baseURL =
    # cat=custom: advanced/150/110; type=boolean; label=No Cache
    no_cache = 1
    # cat=custom: advanced/150/120; type=boolean; label=Compress JavaScript
    compressJs = 1
    # cat=custom: advanced/150/130; type=boolean; label=Compress Css
    compressCss = 1
    # cat=custom: advanced/150/140; type=boolean; label=Concatenate JavaScript
    concatenateJs = 1
    # cat=custom: advanced/150/150; type=boolean; label=Concatenate Css
    concatenateCss = 1
    # cat=custom: advanced/150/160; type=text; label=Header Comment
    headerComment = Designed by 极益科技
}