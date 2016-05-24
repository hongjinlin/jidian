############
### PAGE ###
#<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/frontend/private/configuration/typoscript/constants.ts">
############
page {
    logo {
        # cat=custom: basic/110/file; type=string; label=Logo: Leave blank to use website title from template instead
        file = fileadmin/templates/frontend/public/images/logo.png
        # cat=custom: basic/110/height; type=int+; label=Height: The image will not be resized!
        height =
        # cat=custom: basic/110/width; type=int+; label=Width: The image will not be resized!
        width =
    }

    favicon{
        # cat=custom: basic/110/file; type=string; label=Favicon: favicon icon
        file = fileadmin/templates/frontend/public/images/favicon.ico
    }

    theme {
        # cat=custom: basic/160/110; type=boolean; label=Breadcrumb: Enable to display the breadcrumb
        breadcrumb = 1
        copyright {
            enable = 1
            text = Powered by <a href="//www.ngoos.org/" target="_blank">NGOOS</a>
        }
    }

    fluidtemplate {
        # cat=custom: advanced/100/100; type=string; label=Layout Root Path: Path to layouts
        layoutRootPath = fileadmin/templates/frontend/private/layouts/
        # cat=custom: advanced/100/110; type=string; label=Partial Root Path: Path to partials
        partialRootPath = fileadmin/templates/frontend/private/partials/
        # cat=custom: advanced/100/120; type=string; label=Template Root Path: Path to templates
        templateRootPath = fileadmin/templates/frontend/private/templates/
    }

    includePath {
        # cat=custom: advanced/130/100; type=string; label=Css Include Path: Path to css files
        css = fileadmin/templates/frontend/public/css/
        # cat=custom: advanced/130/120; type=string; label=JavaScript Include Path: Path to css files
        javascript = fileadmin/templates/frontend/public/js/
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
        robots = index
        # cat=custom: advanced/120/120; type=string; label=apple-mobile-web-app-capable
        apple-mobile-web-app-capable = no
        # cat=custom: advanced/120/130; type=string; label=compatible
        compatible = IE=edge,chrome=1
        # cat=custom: advanced/120/140; type=string; label=google
        google =
    }
}

##############
### CONFIG ###
##############
config {
    # cat=custom: advanced/150/110; type=boolean; label=No Cache
    no_cache = 0
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