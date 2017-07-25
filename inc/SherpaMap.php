<?php

class SherpaMap
{
    // Set up our variables
    ///  First our map options
    private $googleMapsApiKey = '';
    private $mapVar = 'map';
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
    private $mapStyles = '[]';

    /// Set up icon for the map
    public $icon = new SherpaIcon();

    /// This is going to be an array of SherpaMapMarkers
    private $markers = array();
    
    /// Misc for error checking
    private $tfcheckVals = array('true', 'false');
    
    



    // Create our get methods
    public getGoogleMapsApiKey() {return $this->googleMapsApiKey;}
    public getMapVar() {return $this->mapVar;}
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
    public setGoogleMapsApiKey($val)
    {
	    $this->googleMapsApiKey = $val;
	    return $this;
    }
    
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
		    $this->setGoogleMapsApiKey($args);
		    return $this;
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
    
    public createMarker($args)
    {
        $this->markers[] = new SherpaMapMarker($args);
        return $this;
    }
    
    public buildMap()
    {
	    ob_start();
	    ?>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=<?=$this->getGoogleMapsApiKey()?>&v=3.exp"></script>
	<script>
		var <?=$this->getMapVar()?>;
		
		function initialize<?=$this->getMapVar()?>() {
			var <?=$this->getMapVar()?>Options = {
				mapTypeId: <?=$this->getMapTypeId()?>,
				mapTypeControl: <?=$this->getMapTypeControl()?>,
				zoom: <?=$this->getZoom()?>,
				zoomControl: <?=$this->getZoomControl()?>,
				panControl: <?=$this->getPanControl()?>,
				streetViewControl: <?=$this->getStreetViewControl()?>,
				scaleControl: <?=$this->getScaleControl()?>,
				overviewMapControl: <?=$this->getOverviewMapControl()?>,
				scrollwheel: <?=$this->getScrollwheel()?>,
				center: {lat: <?=$this->getCenterLat()?>, lng: <?=$this->getCenterLng()?>}
			};
			
			<?=$this->getMapVar()?> = new google.maps.Map(document.getElementById('<?=$this->getMapId()?>'), <?=$this->getMapVar()?>Options);
			
			var <?=$this->getMapVar()?>Styles = <?=$this->getMapStyles()?>;
			
			<?=$this->getMapVar()?>.setOptions({styles: <?=$this->getMapVar()?>Styles});
			
			var icon = {
				path: '<?=$this->icon->getPath()?>',
				anchor: new google.maps.Point(<?=$this->icon->getAnchorX()?>, <?=$this->icon->getAnchorY()?>),
				fillColor: '<?=$this->icon->getFillColor()?>',
				fillOpacity: <?=$this->icon->getFillOpacity()?>,
				strokeWeight: <?=$this->icon->getStrokeWeight()?>,
				scale: <?=$this->icon->getScale()?>
			};
			
			<?php
				foreach($this->getMarkers() as $marker)
				{
					?>
			var contentString<?=$marker->getMarkerId()?> = <?=$marker->getContent()?>;
			
			var infowindow<?=$marker->getMarkerId()?> = new google.maps.InfoWindow({
				content: contentString<?=$marker->getMarkerId()?>
			});					
					<?php
				}
			?>	
		}
	</script>
	    
	    <?php
    }
    
    
    
    
}