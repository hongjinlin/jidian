#############
#<INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/templates/default/Private/Configuration/PageTS/TSConfig.ts">
#### RTE ####
#############
RTE {
    // Default RTE configuration (all tables)
    default {
        // Default target for links
        defaultLinkTarget = _top

        // Buttons to show
        showButtons = *

        // Toolbar order
        toolbarOrder = formatblock, textstyle, linebreak, bold, italic, underline, textcolor, bgcolor, strikethrough, bar, orderedlist, unorderedlist, bar, left, center, right, copy, cut, paste, bar, undo, redo, removeformat, bar, link, unlink, image, linkcreator, bar, imageeditor, bar, line, insertparagraphbefore, insertparagraphafter, bar, chMode

        RTEHeightOverride = 350
        //RTEWidthOverride = 700

        //hide / show HTML tag
        buttons.formatblock.orderItems = h1, h2, h3, h4, h5, h6, p, quotation
        buttons.textstyle.tags.span.allowedClasses >
        buttons.textstyle.tags.REInlineTags >
        buttons.textstyle.REInlineTags >
        buttons.blockstyle.tags.table.allowedClasses >
        buttons.left.useClass = text-left
        buttons.center.useClass = text-center
        buttons.right.useClass = text-right
        buttons.image.options.magic.maxWidth = 1000

        // Disable contextual menu
        contextMenu.disabled = 1
        showStatusBar = 1
        contentCSS = fileadmin/templates/frontend/public/css/rte.css
        removeTagsAndContents =
        useCSS = 1

        // Processing rules
        proc {
            allowedClasses < RTE.default.classesCharacter
            overruleMode = ts_css
            dontConvBRtoParagraph = 1
            remapParagraphTag = p
            allowTags = a, abbr, acronym, address, blockquote, b, br, caption, cite, code, div, em, font, h1, h2, h3, h4, h5, h6, hr, i, img, li, link, ol, p, pre, q, sdfield, span, strike, strong, sub, sup, u, ul
            denyTags >
            keepPDIVattribs = xml:lang,class,style,align
            allowTagsOutside = img,hr,h1,h2,h3,h4,h5,h6,br,ul,ol,li,pre,address,span,blockquote
            allowTagsInTypolists = br,font,b,i,u,a,img,span
            dontRemoveUnknownTags_db = 1
            preserveTables = 0

            entryHTMLparser_db = 1
            entryHTMLparser_db {
                allowTags < RTE.default.proc.allowTags
                denyTags >
                htmlSpecialChars = 0
                tags.img >
                tags.div.allowedAttribs = class,style,align
                tags.p.allowedAttribs = class,style,align
                removeTags = center, font, o:p, sdfield, strike, u
                keepNonMatchedTags = protect
            }

            HTMLparser_db {
                noAttrib = br
                xhtml_cleaning = 1
            }

            exitHTMLparser_db = 1
            exitHTMLparser_db {
                tags.b.remap = strong
                tags.i.remap = em
                keepNonMatchedTags = 1
                htmlSpecialChars = 0
            }
        }
    }
}

// Frontend RTE configuration
RTE.default.FE < RTE.default


TCEFORM.tt_content.section_frame.addItems.99 = 容器
TCEFORM.pages.layout.altLabels.0 = 默认
TCEFORM.pages.layout.altLabels.1 = 通栏

tx_news.templateLayouts {
    1 = Home
}