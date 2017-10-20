# TYPO3 CMS Extension ``news_subheadline``

This extension extends the news record by a subheadline text field.

## Requirements

- TYPO3 CMS 7.6.0-8.7
- EXT:news 3.2.5+
- License: GPL 2+

## Installation

Install the extension as any other extension.

If you use composer, use ` composer requite georgringer/news-subheadline`.

## Usage

After filling out the new field, you are able to output it with

```
<f:debug>{newsItem.txNewsSubheadline}</f:debug>
<f:debug>{newsItem.subheadline}</f:debug>
```
