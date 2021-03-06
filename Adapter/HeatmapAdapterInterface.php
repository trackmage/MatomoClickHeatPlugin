<?php


namespace Piwik\Plugins\ClickHeat\Adapter;


interface HeatmapAdapterInterface
{
    /**
     * Get all groups by site ID
     * @param $idSite
     *
     * @return mixed
     */
    public function getGroups($idSite);

    /**
     * @param $requestGroup
     *
     * @return mixed
     */
    public function getGroupUrl($requestGroup);
}