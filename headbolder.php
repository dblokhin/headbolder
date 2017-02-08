<?php
/**
 * @version		0.4
 * @author		webjinn.ru
 */

// no direct access
defined('_JEXEC') or die ;

class plgContentHeadbolder extends JPlugin
{

	function __construct(&$subject, $params)
	{
		parent::__construct($subject, $params);

	}

    function onContentBeforeDisplay($context, &$article, &$params, $limitstart)
    {
        $article->title = preg_replace("/#(.+?)#/s", "<b>$1</b>", $article->title);
        return '';
        //return a string value. Returned value from this event will be displayed in a placeholder.
        // Most templates display this placeholder after the article separator.
    }

}
