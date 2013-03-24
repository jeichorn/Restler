<?php
namespace Luracast\Restler\Format;

/**
 * Passthru format, that is used in cases where you want to use the api for
 * puts of any content type
 *
 * @category   Framework
 * @package    Restler
 * @subpackage format
 * @author     Joshua Eichorn <josh@bluga.net>
 * @copyright  2013 Joshua Eichorn
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://luracast.com/products/restler/
 * @version    3.0.0j
 */
class PassthruFormat extends Format
{
    const EXTENSION = '';

    protected $mime;

    public function encode($data, $humanReadable = false)
    {
        return $data;
    }

    public function decode($data)
    {
        return array('payload' => $data, 'contentType' => $this->getMime());
    }

    public function setMime($mime)
    {
        $this->mime = $mime;
    }

    public function getMime()
    {
        return $this->mime;
    }
}

