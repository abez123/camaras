<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');

	/* ================== Contactos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contactos', 'LA\ContactosController');
	Route::get(config('laraadmin.adminRoute') . '/contacto_dt_ajax', 'LA\ContactosController@dtajax');

	/* ================== Comites ================== */
	Route::resource(config('laraadmin.adminRoute') . '/comites', 'LA\ComitesController');
	Route::get(config('laraadmin.adminRoute') . '/comite_dt_ajax', 'LA\ComitesController@dtajax');

	/* ================== Eventos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/eventos', 'LA\EventosController');
	Route::get(config('laraadmin.adminRoute') . '/evento_dt_ajax', 'LA\EventosController@dtajax');

	/* ================== Servicios ================== */
	Route::resource(config('laraadmin.adminRoute') . '/servicios', 'LA\ServiciosController');
	Route::get(config('laraadmin.adminRoute') . '/servicio_dt_ajax', 'LA\ServiciosController@dtajax');

	/* ================== Comite_Avisos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/comite_avisos', 'LA\Comite_AvisosController');
	
	Route::get(config('laraadmin.adminRoute') . '/comite_aviso_dt_ajax', 'LA\Comite_AvisosController@dtajax');

	/* ================== Comunicacions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/comunicacions', 'LA\ComunicacionsController');
	Route::get(config('laraadmin.adminRoute') . '/comunicacion_dt_ajax', 'LA\ComunicacionsController@dtajax');

	/* ================== Promocions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/promocions', 'LA\PromocionsController');
	Route::get(config('laraadmin.adminRoute') . '/promocion_dt_ajax', 'LA\PromocionsController@dtajax');

	/* ================== PerfilDePuestos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/perfildepuestos', 'LA\PerfilDePuestosController');
	Route::get(config('laraadmin.adminRoute') . '/perfildepuesto_dt_ajax', 'LA\PerfilDePuestosController@dtajax');

	/* ================== Candidatos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/candidatos', 'LA\CandidatosController');
	Route::get(config('laraadmin.adminRoute') . '/candidato_dt_ajax', 'LA\CandidatosController@dtajax');

	/* ================== Publicacions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/publicacions', 'LA\PublicacionsController');
	Route::get(config('laraadmin.adminRoute') . '/publicacion_dt_ajax', 'LA\PublicacionsController@dtajax');

	/* ================== Screenings ================== */
	Route::resource(config('laraadmin.adminRoute') . '/screenings', 'LA\ScreeningsController');
	Route::get(config('laraadmin.adminRoute') . '/screening_dt_ajax', 'LA\ScreeningsController@dtajax');

	/* ================== Entrevistas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/entrevistas', 'LA\EntrevistasController');
	Route::get(config('laraadmin.adminRoute') . '/entrevista_dt_ajax', 'LA\EntrevistasController@dtajax');

	/* ================== Evaluacions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/evaluacions', 'LA\EvaluacionsController');
	Route::get(config('laraadmin.adminRoute') . '/evaluacion_dt_ajax', 'LA\EvaluacionsController@dtajax');

	/* ================== Confirmacions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/confirmacions', 'LA\ConfirmacionsController');
	Route::get(config('laraadmin.adminRoute') . '/confirmacion_dt_ajax', 'LA\ConfirmacionsController@dtajax');

	/* ================== Contratacions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contratacions', 'LA\ContratacionsController');
	Route::get(config('laraadmin.adminRoute') . '/contratacion_dt_ajax', 'LA\ContratacionsController@dtajax');

	/* ================== Alianzas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/alianzas', 'LA\AlianzasController');
	Route::get(config('laraadmin.adminRoute') . '/alianza_dt_ajax', 'LA\AlianzasController@dtajax');

	/* ================== ContactoAlianzas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contactoalianzas', 'LA\ContactoAlianzasController');
	Route::get(config('laraadmin.adminRoute') . '/contactoalianza_dt_ajax', 'LA\ContactoAlianzasController@dtajax');

	/* ================== Proyectos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/proyectos', 'LA\ProyectosController');
	Route::get(config('laraadmin.adminRoute') . '/proyecto_dt_ajax', 'LA\ProyectosController@dtajax');

	/* ================== Licitacions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/licitacions', 'LA\LicitacionsController');
	Route::get(config('laraadmin.adminRoute') . '/licitacion_dt_ajax', 'LA\LicitacionsController@dtajax');

	/* ================== Propuestas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/propuestas', 'LA\PropuestasController');
	Route::get(config('laraadmin.adminRoute') . '/propuesta_dt_ajax', 'LA\PropuestasController@dtajax');

	/* ================== Fallos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/fallos', 'LA\FallosController');
	Route::get(config('laraadmin.adminRoute') . '/fallo_dt_ajax', 'LA\FallosController@dtajax');

	/* ================== Convocatorias ================== */
	Route::resource(config('laraadmin.adminRoute') . '/convocatorias', 'LA\ConvocatoriasController');
	Route::get(config('laraadmin.adminRoute') . '/convocatoria_dt_ajax', 'LA\ConvocatoriasController@dtajax');

	/* ================== Asistencias ================== */
	Route::resource(config('laraadmin.adminRoute') . '/asistencias', 'LA\AsistenciasController');

	Route::get(config('laraadmin.adminRoute') . '/asistencias/email/{id}', 'LA\AsistenciasController@create_from_email');

	Route::get(config('laraadmin.adminRoute') . '/asistencias/emailcancelar/{id}', 'LA\AsistenciasController@cancel_from_email');

	Route::get(config('laraadmin.adminRoute') . '/asistencia_dt_ajax', 'LA\AsistenciasController@dtajax');

	/* ================== Encuestas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/encuestas', 'LA\EncuestasController');

		Route::get(config('laraadmin.adminRoute') . '/encuestas/email/{id}', 'LA\EncuestasController@from_email');

	Route::get(config('laraadmin.adminRoute') . '/encuesta_dt_ajax', 'LA\EncuestasController@dtajax');

	/* ================== Consejos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/consejos', 'LA\ConsejosController');
	Route::get(config('laraadmin.adminRoute') . '/consejo_dt_ajax', 'LA\ConsejosController@dtajax');

	
	

	/* ================== Blogs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/blogs', 'LA\BlogsController');
	Route::get(config('laraadmin.adminRoute') . '/blog_dt_ajax', 'LA\BlogsController@dtajax');

	/* ================== Categorias ================== */
	Route::resource(config('laraadmin.adminRoute') . '/categorias', 'LA\CategoriasController');
	Route::get(config('laraadmin.adminRoute') . '/categoria_dt_ajax', 'LA\CategoriasController@dtajax');

	/* ================== Patrocinadores ================== */
	Route::resource(config('laraadmin.adminRoute') . '/patrocinadores', 'LA\PatrocinadoresController');
	Route::get(config('laraadmin.adminRoute') . '/patrocinadore_dt_ajax', 'LA\PatrocinadoresController@dtajax');
});
