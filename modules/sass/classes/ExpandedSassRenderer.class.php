<?php
/**
 * Expanded Sass renderer.
 *
 * @link http://haml.hamptoncatlin.com/ Original Sass parser (for Ruby)
 * @link http://phphaml.sourceforge.net/ Online documentation
 * @link http://sourceforge.net/projects/phphaml/ SourceForge project page
 * @license http://www.opensource.org/licenses/mit-license.php MIT (X11) License
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Sass
 */

require_once 'SassRenderer.class.php';

/**
 * Expanded Sass renderer.
 *
 * @link http://haml.hamptoncatlin.com/ Original Sass parser (for Ruby)
 * @link http://phphaml.sourceforge.net/ Online documentation
 * @link http://sourceforge.net/projects/phphaml/ SourceForge project page
 * @license http://www.opensource.org/licenses/mit-license.php MIT (X11) License
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Sass
 */
class ExpandedSassRenderer extends SassRenderer
{
	/**
	 * Render Sass source
	 *
	 * @return string
	 */
	public function render()
	{
		$result = '';
		foreach ($this->getElements() as $element)
		{
			$result .= $element->getRule()." {\n";
			foreach ($element->getAttributes() as $name => $value)
				$result .= "  $name: $value;\n";
			$result .= "}\n";
			$result .= new self($element->getChildren());
		}
		return trim($result)."\n";
	}
}
