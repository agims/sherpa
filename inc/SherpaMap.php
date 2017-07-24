<?php

class SherpaMap
{
    // Set up our variables
    ///  First our map options
    private $mapTypeId = 'google.maps.MapTypeId.ROADMAP';
    private $mapTypeControl = 'false';
    private $zoom = 10;
    private $zoomControl = 'false';
    private $panControl = 'false';
    private $streetViewControl = 'false';
    private $scaleControl = 'false';
    private $overviewMapControl = 'false';
    private $scrollwheel = 'false';
    private $centerLat = '31.8682555';
    private $centerLng = '-106.54106385';
    
    /// Which element?
    private $mapId = 'map-canvas';
    
    /// Styles for the map
    private $mapStyles = '';
    
    /// This is going to be an array of SherpaMapMarkers
    private $markers = array();
    
    ///
    private $tfcheckVals = array('true', 'false');
    
    
    public $icon = new SherpaIcon();



    // Create our get methods
    public getMapTypeId() {return $this->mapTypeId;}
    public getMapTypeControl() {return $this->mapTypeControl;}
    public getZoom() {return $this->zoom;}
    public getZoomControl() {return $this->zoomControl;}
    public getPanControl() {return $this->panControl;}
    public getStreetViewControl() {return $this->streetViewControl;}
    public getScaleControl() {return $this->scaleControl;}
    public getOverviewMapControl() {return $this->overviewMapControl;}
    public getScrollwheel() {return $this->scrollwheel;}
    public getCenterLat() {return $this->centerLat;}
    public getCenterLng() {return $this->centerLng;}
    public getMapId() {return $this->mapId;}
    public getMapStyles() {return $this->mapStyles;}
    public getMarkers() {return $this->markers;}
    
    
    // Create our set methods
    public setMapTypeId($val)
    {
        $this->mapTypeId = $val;
        return $this;
    }

    public setMapTypeControl($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->mapTypeControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setZoom($val)
    {
        if(is_integer($val))
        {
            $this->zoom = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setZoomControl($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->zoomControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setPanControl($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->panControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setStreetViewControl($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->streetViewControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setScaleControl($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->scaleControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setOverviewMapControl($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->overviewMapControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setScrollwheel($val)
    {
        if(in_array($val, $this->tfcheckVals))
        {
            $this->zoomControl = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setCenterLat($val)
    {
        if(is_float($var))
        {
            $this->centerLat = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setCenterLng($val)
    {
        if(is_float($var))
        {
            $this->centerLng = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }

    public setMapId($val)
    {
        $this->mapId = $val;
    }

    public setMapStyles($val)
    {
        $this->mapStyles = $val;
    }

    public setMarkers($val)
    {
        if(is_array($var))
        {
            $this->markers = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public addMarker($val)
    {
        if(is_object($val))
        {
            $this->markers[] = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public createMarker()
    {
        $this->markers[] = new SherpaMapMarker();
        return $this;
    }
    
    
    
    
    
    
}