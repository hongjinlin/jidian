#index search exact show
plugin.tx_indexedsearch{
    templateFile = fileadmin/templates/frontend/plugin/indexed_search/template.html
    search.exactCount = 1
}

#news config
plugin.tx_news {
    view {
        templateRootPaths {
            0 = fileadmin/templates/frontend/plugin/news/Templates/
            1 >
        }
        partialRootPaths {
            0 = fileadmin/templates/frontend/plugin/news/Partials/
            1 >
        }
        layoutRootPaths {
            0 = fileadmin/templates/frontend/plugin/news/Layouts/
            1 >
        }
        widget.GeorgRinger\News\ViewHelpers\Widget\PaginateViewHelper.templateRootPath = fileadmin/templates/frontend/plugin/news/Templates/
    }
    settings {
        link {
            skipControllerAndAction = 1
        }
        list {
            media {
                image {
                    maxWidth = 400
                    maxHeight = 300
                }
                dummyImage = typo3conf/ext/news/Resources/Public/Images/dummy-preview-image.png
            }
            paginate.insertAbove = 0
        }
        detail{
            media{
                image{
                    maxWidth = 500
                }
            }
        }
        cropMaxCharacters = 100
        cssFile =fileadmin/templates/frontend/plugin/news/news-basic.css
    }
}
#news detail
[globalVar = GP:tx_news_pi1|news > 0]
    config.defaultGetVars {
        tx_news_pi1 {
            controller=News
            action=detail
        }
    }
[global]

#power mail
plugin.tx_powermail.view{
    templateRootPaths.0 = fileadmin/templates/frontend/plugin/powermail/Templates/
    templateRootPaths.1 = fileadmin/templates/frontend/plugin/powermail/Templates/
    partialRootPaths.0 = fileadmin/templates/frontend/plugin/powermail/Partials/
    partialRootPaths.1 = fileadmin/templates/frontend/plugin/powermail/Partials/
    layoutRootPaths.0 = fileadmin/templates/frontend/plugin/powermail/Layouts/
    layoutRootPaths.1 = fileadmin/templates/frontend/plugin/powermail/Layouts/
}

page.includeJSFooterlibs.powermailJQuery>
page.includeJSFooter.powermailJQueryDatepicker>
