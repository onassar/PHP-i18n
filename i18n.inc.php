<?php

    /**
     * __
     * 
     * Localization function which handles the toggling between english and
     * french strings. Based on a LANG constant that should be set before a
     * request is processed.
     * 
     * @access public
     * @param  string|null $en.
     * @param  string|null $fr.
     * @return string
     */
    function __($en = null, $fr = null)
    {
        if ($en === null) {
            return LANG;
        }
        return ${LANG};
    }
