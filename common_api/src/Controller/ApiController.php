<?php
namespace Drupal\common_api\Controller;
use Drupal\Core\Controller\ControllerBase;

class ApiController extends ControllerBase {
  public function status() {
    return [
      '#markup' => '<div style="padding:30px; background:#e8f4fd; border:2px solid #0073aa; border-radius:8px; font-family:Arial, sans-serif;">
        <h1 style="color:#0073aa;">Central Common Code</h1>
        <p style="font-size:16px;">Served from: <code>web/modules/custom/common_api</code></p>
        <p style="font-size:16px;">GitHub Source: <strong>https://github.com/' . getenv('GITHUB_USER') . '/drupal-common-modules</strong></p>
        <p style="color:green; font-weight:bold;">Status: Successfully loaded from common repository!</p>
      </div>',
    ];
  }
}
