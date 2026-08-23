<?php
namespace Drupal\common_api\Controller;
use Drupal\Core\Controller\ControllerBase;
// comment
class ApiController extends ControllerBase {
  public function status() {
    return [
      '#markup' => '<div style="padding:30px; background:#e8f4fd; border:2px solid #0073aa; border-radius:8px; font-family:Arial, sans-serif;">
        <h1 style="color:#0073aa;">⚡ Central Common API (Updated to v1.1.0!)</h1>
        <p style="font-size:16px;">Served from: <code>web/modules/custom/common_api</code></p>
        <p style="font-size:16px;">New Feature: <strong>Real-time API Health Check Active</strong></p>
        <p style="color:green; font-weight:bold;">Status: Live in local environment without any sync steps!</p>
      </div>',
    ];
  }
}
