# TYPO3 CMS Extension ``news_subheadline``

This extension extends the news record by a subheadline text field.

## Requirements

- TYPO3 CMS 6.2-8.2
- EXT:news 3.2.5+
- License: GPL 2+

## Installation

Install the extension as any other extension.

If you use composer, use either ``"georgringer/news-subheadline":"1.0.*`` or ``"typo3-ter/news-subheadline":"1.0.*``

## Usage

After filling out the new field, you are able to output it with

```
<f:debug>{newsItem.txNewsSubheadline}</f:debug>
<f:debug>{newsItem.subheadline}</f:debug>
```