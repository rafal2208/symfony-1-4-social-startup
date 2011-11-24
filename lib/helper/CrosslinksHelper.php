<?php

function link_to_frontend($name, $parameters = array())
{
  return sfProjectConfiguration::getActive()->generateFrontendUrl($name, $parameters);
}

function link_to_backend($name, $parameters = array())
{
  return sfProjectConfiguration::getActive()->generateBackendUrl($name, $parameters);
}