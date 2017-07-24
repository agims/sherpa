<?php

class SherpaIcon
{
    private $path = 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z';
    private $anchorX = 16.5;
    private $anchorY = 51;
    private $fillColor = '#080326';
    private $fillOpacity = 1;
    private $strokeColor = '#000';
    private $strokeWeight = 0;
    private $scale = 1;
    
    
    
    public getPath() {return $this->path;}
    public getAnchorX() {return $this->anchorX;}
    public getAnchorY() {return $this->anchorY;}
    public getFillColor() {return $this->fillColor;}
    public getFillOpacity() {return $this->fillOpacity;}
    public getStrokeColor() {return $this->strokeColor;}
    public getStrokeWeight() {return $this->strokeWeight;}
    public getScale() {return $this->scale;}
    
    public setPath($val)
    {
        $this->path = $val;
        return $this;
    }
    
    public setAnchorX($val)
    {
        if(is_float($val))
        {
            $this->anchorX = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public setAnchorY($val)
    {
        if(is_float($val))
        {
            $this->anchorY = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public setFillColor($val)
    {
        $this->fillColor = $val;
        return $this;
    }
    
    public setFillOpacity($val)
    {
        if(is_float($val) && $val >= 0 && $val <= 1)
        {
            $this->fillOpacity = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public setStrokeColor($val)
    {
        $this->strokeColor = $val;
        return $this;
    }
    
    public setStrokeWeight($val)
    {
        if(is_float($val))
        {
            $this->strokeWeight = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public setScale($val)
    {
        if(is_float($val) && $val >= 0 && $val <= 1)
        {
            $this->scale = $val;
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public createIcon()
    {
        ob_start();
        ?>

				var icon = {
					path: '<?=$this->getPath()?>',
					anchor: new google.maps.Point(<?=$this->getAnchorX()?>, <?=$this->getAnchorY()?>),
					fillColor: '<?=$this->getFillColor()?>',
					fillOpacity: <?=$this->getFillOpacity()?>,
					strokeWeight: <?=$this->getStrokeWeight()?>,
					scale: <?=$this->getScale()?>
				};
        
        <?php
        return ob_get_clean();
    }
    
    
}