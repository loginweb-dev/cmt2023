<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Models\User;
use Carbon\Carbon;

class Documento extends Model
{
	use SoftDeletes;
	protected $fillable = [
	'name',
	'description',
	'estado_id',
	'categoria_id',
	'archivo',
	'tipo',
	'remitente_id_interno',
    'remitente_id_externo',
	'editor_id'
	];
	// protected $appends=['published'];


    protected $appends=['published', 'fecha'];
    public function getPublishedAttribute(){
      return Carbon::createFromTimeStamp(strtotime($this->attributes['created_at']) )->diffForHumans();
    }
    public function getFechaAttribute(){
      return date('Y-m-d h:m:s', strtotime($this->attributes['created_at']));
    }  

	public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id');
    }
	public function remitente_interno()
    {
        return $this->belongsTo(User::class, 'remitente_id_interno');
    }
	public function remitente_externo()
    {
        return $this->belongsTo(Persona::class, 'remitente_id_externo');
    }
	public function destinatario()
    {
        return $this->belongsTo(User::class, 'destinatario_id');
    }
	public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
	public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
    public function copias()
    {
        return $this->hasMany(RelUserDoc::class);
    }
    public function detalle()
    {
        return $this->hasMany(DocumentoDetalle::class);
    }
}
