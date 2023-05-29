<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SLAModel;
use App\Models\hitung_slaModel;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Models\all_siteModels;
use DateTime;
use DateTimeZone;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Exports\SLAExcel;
use App\Exports\Excel_Site;
use App\Exports\Excel_detail;

class MonitoringController extends Controller
{
    public function monitoring()
    {
        return view('monitoring.monitoring');

    }
}
