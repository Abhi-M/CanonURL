CanonURL
========
Adds the canonical links to the head of Mediawiki pages according to Google Canonicalization Content Guidelines
--------------------------------------------------------------------------
README for the CanonURL extension 0.2
Licenses: GNU General Public Licence (GPL)
          GNU Free Documentation License (GFDL)
--------------------------------------------------------------------------
Adds the canonical links to the head of Mediawiki pages according to Google Canonicalization Content Guidelines.
<https://mediawiki.org/wiki/Extension:CanonURL>
Written by Abhi M Balakrishnan (http://about.me/abhim)

== Prerequisites ==
This version of CanonURL requires MediaWiki 1.19 or later.

== Installing ==
Copy the CanonURL directory into the extensions folder of your MediaWiki installation.

== Verifying the installation ==
See [[Special:Version]] and confirm the presence of CanonURL under "Installed extensions", "other" category

== Verifying the configuration ==
* Clear the cache of your browser
* Reload any Mediawiki page
* Check the HTML source and confirm the presence of following line before </head>:
	<link rel="canonical" href="CANONICAL_URL_OF_CURRENT_PAGE" />
