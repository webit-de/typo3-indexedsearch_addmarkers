Indexed Search Add Markers
==========================

With the help of this extension the administrator is able to add custom markers to EXT:indexed_search.

This is necessary if a website has several languages, but the administrator want's to avoid having several templates just to localize some strings.

The current status of the extension is a very low alpha, it does not do very much yet. At this point of time it just adds custom markers to a row.

Usage
-----

The following example TypoScript is adding the marker relevance to a row of the search result (dont forget to add ###RELEVANCE### to your template file) and modifies the title-marker.

    ### Additional markers for indexed search
    plugin.tx_indexedsearchaddmarkers {
        rowView {
            markers {
                relevance = TEXT
                relevance {
                    value = Relevance
                    lang.de = Relevanz
                    lang.fr = Pertinence
                    lang.cz = Relevance
                    wrap = |:
                }

                #title = TEXT
                #title {
                #	field = item_title
                #	wrap = <em>|</em>
                #}
            }
        }
    }

License
-------

GNU General Public License version 2

The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html.

Author
------

Dan Untenzu (<untenzu@webit.de>)
for webit! Gesellschaft für neue Medien mbH (http://www.webit.de/)

Changelog
---------

./Changelog.md

Contribution
------------

> TYPO3 - inspiring people to share!

This TYPO3 extension is Open Source, so please use, patch, extend or fork it.
