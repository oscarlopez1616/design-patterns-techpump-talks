<?php


namespace VO\Practise;


interface ProviderSpeedService
{
    /**
     * @param Speed $speed
     * @return mixed
     * @throws MatchSpeedNotAllowedException
     */
    public function speedIsAllowedOrFail(Speed $speed);
}
