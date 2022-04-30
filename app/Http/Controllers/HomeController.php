<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected Request $request;
    protected Report $report;

    public function __construct(Request $request, Report $report)
    {
        $this->request = $request;
        $this->report = $report;
        // $this->middleware('auth');
    }

    public function index()
    {
        $reports = $this->report->all();

        return view('reports.index', compact('reports'));
    }

    public function show(Report $report)
    {
        $productTypes = config('constants')['product'];
        $productTypes = ["" => "---"] + $productTypes;

        $versionTypes = config('constants')['version'];
        $versionTypes = ["" => "---"] + $versionTypes;

        $operationalSystemTypes = config('constants')['operational_system'];
        $operationalSystemTypes = ["" => "---"] + $operationalSystemTypes;

        $priorityTypes = config('constants')['priority'];
        $priorityTypes = ["" => "---"] + $priorityTypes;

        $severityTypes = config('constants')['severity'];
        $severityTypes = ["" => "---"] + $severityTypes;

        $statusTypes = config('constants')['status'];
        $statusTypes = ["" => "---"] + $statusTypes;

        return view('reports.show', compact(
            'report',
            'productTypes',
            'versionTypes',
            'operationalSystemTypes',
            'priorityTypes',
            'severityTypes',
            'statusTypes'
        ));
    }

    public function create()
    {
        $productTypes = config('constants')['product'];
        $productTypes = ["" => "---"] + $productTypes;

        $versionTypes = config('constants')['version'];
        $versionTypes = ["" => "---"] + $versionTypes;

        $operationalSystemTypes = config('constants')['operational_system'];
        $operationalSystemTypes = ["" => "---"] + $operationalSystemTypes;

        $priorityTypes = config('constants')['priority'];
        $priorityTypes = ["" => "---"] + $priorityTypes;

        $severityTypes = config('constants')['severity'];
        $severityTypes = ["" => "---"] + $severityTypes;

        $statusTypes = config('constants')['status'];
        $statusTypes = ["" => "---"] + $statusTypes;

        return view('reports.create', compact(
            'productTypes',
            'versionTypes',
            'operationalSystemTypes',
            'priorityTypes',
            'severityTypes',
            'statusTypes'
        ));
    }

    public function store(ReportRequest $request)
    {
        try {
            $data = $request->only([
                'title',
                'product',
                'version',
                'module',
                'operational_system',
                'priority',
                'severity',
                'status',
                'url',
                'bug_description'
            ]);

            $data['user_id'] = auth()->user()->id;

            $this->report->create($data);

            $request->session()->flash('success', 'Registro gravado com sucesso!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Ocorreu um erro ao tentar gravar esses dados!');
        }

        return redirect()->back();
    }

    public function edit(Report $report)
    {
        $productTypes = config('constants')['product'];
        $productTypes = ["" => "---"] + $productTypes;

        $versionTypes = config('constants')['version'];
        $versionTypes = ["" => "---"] + $versionTypes;

        $operationalSystemTypes = config('constants')['operational_system'];
        $operationalSystemTypes = ["" => "---"] + $operationalSystemTypes;

        $priorityTypes = config('constants')['priority'];
        $priorityTypes = ["" => "---"] + $priorityTypes;

        $severityTypes = config('constants')['severity'];
        $severityTypes = ["" => "---"] + $severityTypes;

        $statusTypes = config('constants')['status'];
        $statusTypes = ["" => "---"] + $statusTypes;

        return view('reports.edit', compact(
            'report',
            'productTypes',
            'versionTypes',
            'operationalSystemTypes',
            'priorityTypes',
            'severityTypes',
            'statusTypes'
        ));
    }

    public function update(Report $report, ReportRequest $request)
    {
        try {
            $data = $request->only([
                'title',
                'product',
                'version',
                'module',
                'operational_system',
                'priority',
                'severity',
                'status',
                'url',
                'bug_description'
            ]);

            $report->update($data);

            $request->session()->flash('success', 'Registro gravado com sucesso!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Ocorreu um erro ao tentar gravar esses dados!');
        }

        return redirect()->back();
    }

    public function destroy(Report $report)
    {
        try {
            $report->delete();

            $this->request->session()->flash('success', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            $this->request->session()->flash('error', 'Ocorreu um erro ao tentar excluir esses dados!');
        }

        return redirect()->back();
    }
}
