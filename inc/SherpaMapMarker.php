<?php

class SherpaMapMarker
{
    private $markerId = '';
    private $markerPosLat = 0;
    private $markerPosLng = 0;
    private $markerTitle = '';
    private $content = '';
    
    public getMarkerId() {return $this->markerId;}
    public getMarkerPosLat() {return $this->markerPosLat;}
    public getMarkerPosLng() {return $this->markerPosLng;}
    public getMarkerTitle() {return $this->markerTitle;}
    public getContent() {return $this->content;}
    
    public setMarkerId($val)
    {
	    $this->markerId = $val;
	    return $this;
    }
    
    public setMarkerPosLat($val)
    {
	    if(is_float($val))
	    {
		    $this->markerPosLat = $val;
		    return $this;
	    }
	    else
	    {
		    return FALSE;
	    }
    }

    public setMarkerPosLng($val)
    {
	    if(is_float($val))
	    {
		    $this->markerPosLng = $val;
		    return $this;
	    }
	    else
	    {
		    return FALSE;
	    }
    }
    
    public setMarkerTitle($val)
    {
	    $this->markerTitle = $val;
	    return $this;
    }
    
    public setContent($val)
    {
	    $this->content = $val;
	    return $this;
    }
    
    public __construct($args = NULL)
    {
	    if(is_array($args))
	    {
		    foreach($args as $key => $value)
		    {
			    $f = 'set' . ucfirst($key);
			    $this->$f($value);
		    }
		    return $this;
	    }
	    elseif(is_string($args))
	    {
		    $this->setMarkerId($args);
		    return $this;
	    }
    }
}