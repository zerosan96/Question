<?php
  
  public function getMinTeam(){

		if(min($this->red,$this->green,$this->blue,$this->yellow) === $this->red && $this->plugin->game->rhp > 0){

			$minteam = "red";

		}elseif(min($this->green,$this->blue,$this->yellow) === $this->green && $this->plugin->game->ghp > 0){

			$minteam = "green";

		}elseif(min($this->blue,$this->yellow) === $this->blue && $this->plugin->game->bhp > 0){

			$minteam = "blue";

		}elseif($this->plugin->game->yhp > 0){

			$minteam = "yellow";

		}

		return $minteam;

	}
