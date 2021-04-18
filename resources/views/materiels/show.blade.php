@extends('layouts.userApp')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="header">
                <a class="btn btn-info btn-fill" href="{{ route('materiels.index') }}">Retour</a>
                <a class="btn btn-info btn-fill" href="{{ route('materiels.edit', $materiel->id) }}">Modifer</a>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ __('Serie') }}</label>
                                <input type="email" class="form-control" value="{{ $materiel->mat_serie }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>{{ __('Nom') }}</label>
                                <input type="text" class="form-control" value="{{ $materiel->mat_nom }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Model') }}</label>
                                <input type="text" class="form-control" value="{{ $materiel->mat_model }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Fournisseur') }}</label>
                                <input type="text" class="form-control" value="{{ $fournisseur->for_nom }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Facture') }}</label>
                                <input type="text" class="form-control" value="{{ $materiel->fac_id }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Prix Achat') }}</label>
                                <input type="number" class="form-control" value="{{ $materiel->mat_prixachat }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Garantie') }}</label>
                                <input type="text" class="form-control" value="{{ $materiel->mat_garantie }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ __('Date Achat') }}</label>
                                <input type="Date" class="form-control" value="{{ $materiel->mat_dateachat }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('La Date D\'ajout') }}</label>
                                <input type="" class="form-control" value="{{ $materiel->created_at }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Derniere Modification') }}</label>
                                @if($materiel->updated_at != $materiel->created_at)
                                <input type="" class="form-control" value="{{ $materiel->updated_at }}" readonly>
                                @else
                                <input type="" class="form-control" value="{{ __('Aucune Modification') }}" readonly>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
