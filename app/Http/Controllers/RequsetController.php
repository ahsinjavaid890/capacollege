<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Student;
use Illuminate\Http\Request;

class RequestController extends AdminBaseController
{
  public function requests()
  {
    return \view("requests.orders", [
            "selected_navigation" => "earnings",
            "orders" => $orders,
            "students" => $students,
        ]);
  }
}
