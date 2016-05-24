#######################
#### LANGUAGE MENU ####
#######################
lib.language = COA
lib.language {
    ###################################################
    #### EXAMPLE FOR TYPOSCRIPT LANGUAGE OVERRIDES ####
    #### its not needed in this example            ####
    ###################################################
    10 = TEXT
    10 {
        value = CH
        value.lang.en = EN
        wrap = <a href="#" class="dropdown-toggle" data-toggle="dropdown">|</a>
    }

    20 = HMENU
    20 {
        wrap = <ul class="dropdown-menu">|</ul>
        addQueryString = 1
        addQueryString.exclude = id, L, cHash
        special = language
        special.value = 0,1
        special.normalWhenNoLanguage = 0
        1 = TMENU
        1 {
            noBlur = 1
            NO = 0 #set Current language
            NO {
                allWrap = <li>|</li>|*|<li>|</li>|*|<li class="last">|</li>
                stdWrap.setCurrent = CH || EN
                stdWrap.current = 1
            }

            #### NO TRANSLATION AVAILABLE STATES ####
            #USERDEF1 < .NO
            #USERDEF1 {
            #    linkWrap = |
            #    doNotShowLink = 1
            #}
        }
    }
}

####################
#### NAVIGATION ####
####################
lib.navigation.main = COA
lib.navigation.main.wrap = <aside class="aside">|</aside>
lib.navigation.main {
    10 = HMENU
    10 {
        1 = TMENU
        1 {
            wrap = <nav class="sidebar"><ul class="nav">|</ul></nav>
            expAll = 1
            noBlur = 1
            NO = 1
            NO {
                ATagTitle.field = abstract // description // title
                ATagBeforeWrap = 1
                allWrap = <li class="nav-heading">|</li>
                #allWrap.insertData = 1
                #linkWrap = |<b></b>
                doNotLinkIt = 1
            }
        }
        2 = TMENU
        2 {
            expAll = 1
            noBlur = 1
            NO{
                ATagTitle.field = abstract // description // title
                wrapItemAndSub = <li class="uid-{field:uid}">|</li> |*| <li class="uid-{field:uid}">|</li> |*| <li class="uid-{field:uid} last">|</li>
                wrapItemAndSub.insertData = 1
                stdWrap.innerWrap = <em class="fa {field:icon}"></em><span class="item-text">|</span>
                stdWrap.innerWrap.insertData = 1
                ATagParams.dataWrap = class="no-submenu"
            }
            IFSUB < .NO
            IFSUB = 1
            IFSUB{
                ATagParams.dataWrap = data-toggle="collapse-next" class="has-submenu"
            }
            ACT < .NO
            ACT = 1
            ACT {
                wrapItemAndSub = <li class="uid-{field:uid} active">|</li> |*| <li class="uid-{field:uid} active">|</li> |*| <li class="uid-{field:uid} last active">|</li>
            }
        }
        3 = TMENU
        3 {
            wrap = <ul class="nav collapse in">|</ul>
            noBlur = 1
            NO{
                ATagTitle.field = abstract // description // title
                allWrap = <li class="uid-{field:uid}">|</li>
                allWrap.insertData = 1
                stdWrap.innerWrap = <span class="item-text">|</span>
                ATagParams.dataWrap = class="no-submenu"
            }
            ACT < .NO
            ACT = 1
            ACT {
                allWrap = <li class="uid-{field:uid} active">|</li>
            }
        }
    }
}

#######################
#### SUBNAVIGATION ####
#######################
lib.navigation.subnavigation = COA
lib.navigation.subnavigation {
    10 = HMENU
    10 {
        entryLevel = 1
        1 = TMENU
        1 {
            wrap = <ul class="tabs-menu">|</ul>
            expAll = 1
            noBlur = 1
            NO = 1
            NO {
                ATagTitle.field = abstract // description // title
                allWrap = <li>|</li>
                stdWrap.innerWrap = <span> </span>|
                #wrapItemAndSub = <li>|</li>
                #stdWrap.case = upper
            }
            ACT < .NO
            ACT {
                ATagParams = class="active"
            }

            CUR < .ACT
        }
    }
}

#############
#### BCN ####
#############
lib.navigation.breadcrumb = COA
lib.navigation.breadcrumb {
    required = 1
    #wrap =
    10 = HMENU
    10 {
        special = rootline
        special.range = 1|-1
        includeNotInMenu = 1
        1 = TMENU
        1 {
            noBlur = 1
            target = _self
            #wrap = <ol class="breadcrumb">|</ol>
            NO = 1
            NO {
                stdWrap.field = title
                ATagTitle.field = nav_title // title
                wrapItemAndSub = |&#32;>&#32;
                doNotLinkIt = 1
                doNotLinkIt.if {
                    value.field = doktype
                    equals = 4
                }
            }

            CUR = 1
            CUR {
                stdWrap.field = title
                doNotLinkIt = 1
                wrapItemAndSub = <span class="current">|</span>
            }
        }
    }
}

#[treeLevel = 0] || [treeLevel = 1]
#lib.navigation.breadcrumb >
#[end]

##############
### FOOTER ###
##############
lib.navigation.footer = COA
lib.navigation.footer {
    10 = HMENU
    10 {
        special = directory
        special.value = 12
        1 = TMENU
        1 {
            noBlur = 1
            wrap =
            NO {
                allWrap = <li>|&#32;&#124;</li>|*|<li>&#32;|&#32;&#124;</li>|*|<li>&#32;|</li>
                ATagParams.dataWrap = title='{field:title}'
                stdWrap.htmlSpecialChars = 1
            }

            ACT < .NO
            ACT = 1
            ACT.ATagParams.dataWrap := appendString(class='current')
            #ACT.linkWrap = <li class="current">|&nbsp;&nbsp;&#124;</li>|*||*|<li class="current">|</li>
        }
    }
}