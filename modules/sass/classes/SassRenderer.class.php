<?php
/**
 * Sass renderer.
 *
 * @link http://haml.hamptoncatlin.com/ Original Sass parser (for Ruby)
 * @link http://phphaml.sourceforge.net/ Online documentation
 * @link http://sourceforge.net/projects/phphaml/ SourceForge project page
 * @license http://www.opensource.org/licenses/mit-license.php MIT (X11) License
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Sass
 */

require_once 'CommonRenderer.class.php';
require_once 'SassParser.class.php';

/**
 * Sass renderer.
 *
 * @link http://haml.hamptoncatlin.com/ Original Sass parser (for Ruby)
 * @link http://phphaml.sourceforge.net/ Online documentation
 * @link http://sourceforge.net/projects/phphaml/ SourceForge project page
 * @license http://www.opensource.org/licenses/mit-license.php MIT (X11) License
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Sass
 */
abstract class SassRenderer extends CommonRenderer
{
	/**
	 * Return instance of SassRenderer. Implements
	 * Singleton pattern.
	 *
	 * @param SassElementsList Elements assigned to renderer
	 * @param string Common output style
	 * @return SassRenderer
	 */
	public static function getInstance( $elements, $type = null)
	{
		if (is_null($type))
			$type = self::NESTED;
		return parent::getInstance($elements, $type);
	}
	
	/**
	 * Nested Sass output style (default).
	 *
	 * @see NestedSassRenderer
	 */
	const NESTED = 'NestedSassRenderer';

	/**
	 * Expanded Sass output style
	 *
	 * @see ExpandedSassRenderer
	 */
	const EXPANDED = 'ExpandedSassRenderer';

	/**
	 * Compact Sass output style
	 *
	 * @see CompactSassRenderer
	 */
	const COMPACT = 'CompactSassRenderer';

	/**
	 * Compressed Sass output style
	 *
	 * @see CompressedSassRenderer
	 */
	const COMPRESSED = 'CompressedSassRenderer';
}

require_once 'NestedSassRenderer.class.php';
require_once 'ExpandedSassRenderer.class.php';
require_once 'CompactSassRenderer.class.php';
require_once 'CompressedSassRenderer.class.php';
