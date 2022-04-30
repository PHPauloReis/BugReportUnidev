<div class="row">
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Ex.: Erro ao cadastrar novo usuário']) }}
    </div>

    <div class="mb-3 col-md-3">
        <label for="product" class="form-label">Produto</label>
        {{ Form::select('product', $productTypes, null, ['class' => 'form-select', 'id' => 'product']) }}
    </div>

    <div class="mb-3 col-md-3">
        <label for="version" class="form-label">Versão</label>
        {{ Form::select('version', $versionTypes, null, ['class' => 'form-select', 'id' => 'version']) }}
    </div>

    <div class="mb-3 col-md-3">
        <label for="module" class="form-label">Módulo</label>
        {{ Form::text('module', null, ['class' => 'form-control', 'id' => 'module', 'placeholder' => 'Ex.: users']) }}
    </div>

    <div class="mb-3 col-md-3">
        <label for="operational_system" class="form-label">Sistema Operacional</label>
        {{ Form::select('operational_system', $operationalSystemTypes, null, ['class' => 'form-select', 'id' => 'operational_system']) }}
    </div>

    <div class="mb-3 col-md-3">
        <label for="priority" class="form-label">Prioridade</label>
        {{ Form::select('priority', $priorityTypes, null, ['class' => 'form-select', 'id' => 'priority']) }}
    </div>

    <div class="mb-3 col-md-4">
        <label for="severity" class="form-label">Severidade</label>
        {{ Form::select('severity', $severityTypes, null, ['class' => 'form-select', 'id' => 'severity']) }}
    </div>

    <div class="mb-3 col-md-3">
        <label for="status" class="form-label">Status</label>
        {{ Form::select('status', $statusTypes, null, ['class' => 'form-select', 'id' => 'status']) }}
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">URL para o BUG</label>
        {{ Form::text('url', null, ['class' => 'form-control', 'id' => 'url', 'placeholder' => 'Ex.: http://localhost:8000/users/']) }}
    </div>

</div>

<div class="row">
    <div class="mb-3 col-md-12">
        <label for="bug_description" class="form-label">Descrição</label>
        <div class="alert alert-warning">
            <strong>Importante!</strong><br>
            <p class="mb-0">A descrição deve incluir uma descrição detalhada do problema, os passos para reprodução do problema, o resultado esperado e o resultado obtido.</p>
        </div>
        {{ Form::textarea('bug_description', null, ['class' => 'form-control', 'id' => 'bug_description', 'rows' => '10']) }}
    </div>
</div>
