<?php
/**
 * Interface vs Abstract class
 */

interface Provider {
  public function getAuthorizationUrl();
}

abstract class AbstractProvider {
  abstract protected function getAuthorizationUrl();
}

class FacebookProvider implements Provider {
  protected function getAuthorizationUrl()
  {
    return '';
  }
}
