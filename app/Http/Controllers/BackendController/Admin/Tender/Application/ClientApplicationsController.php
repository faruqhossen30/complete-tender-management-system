<?php

namespace App\Http\Controllers\BackendController\Admin\Tender\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Apply;
use App\Models\Tender\Tender;
use Exception;
use PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class ClientApplicationsController extends Controller
{
    public function index()
    {
        $clientApplyTenders = Apply::latest()->get();
        // return $clientApplyTenders;

        return view('backend.admin.application.index', compact('clientApplyTenders'));
    }

    public function changeApplicationSeenStatus($id)
    {
        try {
            $application = Apply::find($id);
            $status = $application->seen;
            if (!$status) {
                $application->seen = 1;
            } else {
                $application->seen = 0;
            }
            $application->save();
            return redirect()->back()->with(['success' => 'Seen Status Changed successfully']);
        } catch (Exception $e) {
            return response()->json(["error" => "can't change seen status"]);
        }
    }

    public function changeApplicationConfirmationStatus($id)
    {
        try {
            $application = Apply::find($id);
            $status = $application->status;
            if (!$status) {
                $application->status = 1;
            } else {
                $application->status = 0;
            }
            $application->save();
            return redirect()->back()->with(['success' => 'Confirmation Status Changed successfully!']);
        } catch (Exception $e) {
            return response()->json(["error" => "can't change confirmation status!"]);
        }
    }
    public function showSingle($id)
    {
        try {
            $application = Apply::find($id);
            return view('backend.admin.application.show', compact('application'));
        } catch (Exception $e) {
            return response()->json(["error" => "an error ocurd"]);
        }
    }
    public function exportPDF($id)
    {
        try {
            $application = Apply::find($id);

            $data = [
                'companyName' => $application->userInfo->name,
                'companyEmail' => $application->userInfo->email,
                'companyPhone' => $application->userInfo->mobile,
                'companyAddress' => $application->userInfo->address,
                'tenderNumber' => $application->tenderInfo->tenderID,
                'tenderType' => $application->tenderInfo->tenderType->name,
                'tenderCategory' => $application->tenderInfo->tenderCategory->name,
                'tenderDepartment' => $application->tenderInfo->tenderDepartment->name,
                'tenderCountry' => $application->tenderInfo->tenderCountry->name,
                'tenderLocation' => $application->tenderInfo->tenderLocation->name,
                'tenderDescription' => $application->tenderInfo->description,
                'tenderSecurity' => $application->tenderInfo->tenderSecurity,
                'tenderBudget' => $application->tenderInfo->tenderBudget,
                'lastDate' => $application->tenderInfo->lastDate,

            ];
            $pdf = PDF::loadView('backend.admin.application.application-pdf', $data);
            return $pdf->stream();
        } catch (Exception $e) {
            return response()->json(["error" => "an error ocurd"]);
        }
    }
}
