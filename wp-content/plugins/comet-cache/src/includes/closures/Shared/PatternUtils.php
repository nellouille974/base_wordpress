<?php
namespace WebSharks\CometCache;

/*
 * Convert line-delimited patterns to a regex.
 *
 * @since 151114 Enhancing exclusion pattern support.
 *
 * @param string $patterns Line-delimited list of patterns.
 *
 * @return string A `/(?:list|of|regex)/i` patterns.
 */
$self->lineDelimitedPatternsToRegex = function ($patterns) use ($self) {
    $regex    = ''; // Initialize list of regex patterns.
    $patterns = (string) $patterns;

    if (($patterns = preg_split('/['."\r\n".']+/', $patterns, -1, PREG_SPLIT_NO_EMPTY))) {
        $regex = '/(?:'.implode('|', array_map($self->wdRegexToActualRegexFrag, $patterns)).')/i';
    }
    return $regex;
};

/*
 * Convert watered-down regex to actual regex.
 *
 * @since 151114 Enhancing exclusion pattern support.
 *
 * @param string $string Input watered-down regex to convert.
 *
 * @return string Actual regex pattern after conversion.
 */
$self->wdRegexToActualRegexFrag = function ($string) use ($self) {
    return preg_replace(
        array(
            '/\\\\\^/',
            '/\\\\\*\\\\\*/',
            '/\\\\\*/',
            '/\\\\\$/',
        ),
        array(
            '^', // Beginning of line.
            '.*?', // Zero or more chars.
            '[^\/]*?', // Zero or more chars != /.
            '$', // End of line.
        ),
        preg_quote((string) $string, '/')
    );
};
