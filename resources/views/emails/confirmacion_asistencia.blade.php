<!DOCTYPE html>
<html>
<head>
<title>Confirmación al Comité</title>
<!--

An email present from your friends at Litmus (@litmusapp)

Email is surprisingly hard. While this has been thoroughly tested, your mileage may vary.
It's highly recommended that you test using a service like Litmus (http://litmus.com) and your own devices.

Enjoy!

-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
/* CLIENT-SPECIFIC STYLES */
body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;} /* Remove spacing between tables in Outlook 2007 and up */
img{-ms-interpolation-mode: bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

/* RESET STYLES */
img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
table{border-collapse: collapse !important;}
body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

/* iOS BLUE LINKS */
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;
font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}

/* MOBILE STYLES */
@media screen and (max-width: 525px) {

/* ALLOWS FOR FLUID TABLES */
.wrapper {
width: 100% !important;
max-width: 100% !important;
}

/* ADJUSTS LAYOUT OF LOGO IMAGE */
.logo img {
margin: 0 auto !important;
}

/* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
.mobile-hide {
display: none !important;
}

.img-max {
max-width: 100% !important;
width: 100% !important;
height: auto !important;
}

/* FULL-WIDTH TABLES */
.responsive-table {
width: 100% !important;
}

/* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
.padding {
padding: 10px 5% 15px 5% !important;
}

.padding-meta {
padding: 30px 5% 0px 5% !important;
text-align: center;
}

.no-padding {
padding: 0 !important;
}

.section-padding {
padding: 50px 15px 50px 15px !important;
}

/* ADJUST BUTTONS ON MOBILE */
.mobile-button-container {
margin: 0 auto;
width: 100% !important;
}

.mobile-button {
padding: 15px !important;
border: 0 !important;
font-size: 16px !important;
display: block !important;
}

}

    
/* ANDROID CENTER FIX */
div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important;">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
Confirmación de comités de AMCHM Guadalajara
</div>

<!-- HEADER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td bgcolor="#333333" align="center">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper">
<tr>
<td align="center" valign="top" style="padding: 15px 0;" class="logo">
<a href="http://www.amcham.org.mx" target="_blank">
<img alt="Logo" src="{{{'https://www.amcham.org.mx/sites/all/themes/custom/amcham/logo.png'}}}" width="60" height="60" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;" border="0">
</a>
</td>
@if($logoexpositor)
<td align="center" valign="top" style="padding: 15px 0;" class="logo">
<a href="{{$logoexpositor->path()}}" target="_blank">
<img alt="Seleccione aquí para ver Logo" src="{{$logoexpositor->path()}}" width="60" height="60" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;" border="0">
</a>
</td>
@endif
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td bgcolor="#ffffff" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
<tr>
<td>
<!-- HERO IMAGE -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>@if($temarioimagen)
<td class="padding" align="center">
<a href="{{$temarioimagen->path()}}" target="_blank">
<img src="{{$temarioimagen->path()}}" width="500" height="400" border="0" alt="Seleccione aquí para ver imagen" style="display: block; color: #666666;  font-family: Helvetica, arial, sans-serif; font-size: 16px;" class="img-max">
</a>
</td>
</tr>
@endif
<tr>
<td>
<!-- COPY -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
<td align="center" style="font-size: 35px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding"><strong>Asistencia confirmada</strong> </td>
</tr>
	<tr>
<td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding"><strong>Participante:</strong> {{$miembroname}}</td>
</tr>
<tr>
<td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding"><strong>Comité:</strong> {{$comitename}}</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Titulo:</strong> {{ $name }}</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Fecha y Horario:</strong> {{   date("l, F d Y h:i A", strtotime($horario)) }}</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Sede:</strong> {{ $sedenombre }}</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Domicilio:</strong><a target="_blank" class="pull-right btn btn-xs btn-primary btn-circle" href="http://maps.google.com/?q={{$sededomicilio}}" data-toggle="tooltip" data-placement="left" title="Ver Ubicación en el Mapa"><i class="fa fa-map-marker"></i>{{ strip_tags($sededomicilio) }}</a> </td>
</tr>

<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Precio Socio:</strong> ${{ $preciosocio }}.00</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Precio No socio:</strong> ${{ $precionosocio }}.00</td>
</tr>
@if($temario)
<tr>

<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Temario:</strong> {{ preg_replace('/(<.*?>)|(&.*?;)/', '',  $temario) }}</td></tr>@endif
<tr>
    
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Expositor:</strong> {{ $expositor }}</td>
</tr>
<tr>
    
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Información Adicional:</strong> {{ preg_replace('/(<.*?>)|(&.*?;)/', '',  $comentarios) }}</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<!-- BULLETPROOF BUTTON -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" style="padding-top: 25px;" class="padding">
<table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
<tr>
<td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding"><strong>Puede cancelar 48 horas antes del horario de la convocatoria sin cobro. A partir de las 48 horas se cobrará el 100% del costo del evento</strong></td>

</tr>
<tr>
<td align="center" style="border-radius: 3px;" bgcolor="#256F9C"><a href="{{ url('/asistencias/emailcancelar/'.$asistencia_id) }}" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #256F9C; display: inline-block;" class="mobile-button">Cancelar &rarr;</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td bgcolor="#F5F7FA" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
<tr>
<td>
<!-- TITLE SECTION AND COPY -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333;" class="padding">Nuestro Newsletter</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 20px 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding">Información actualizada de AMCHAM Guadalajara.</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" height="100%" valign="top" width="100%">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px;">
<tr>
<td align="center" valign="top" style="font-size:0;" class="padding">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="left" valign="top" width="240">
<![endif]-->
@foreach($noticias as $noti)
 <?php $imgs = \App\Models\Upload::find($noti['blogimg']); ?>
<div style="display:inline-block; margin: 0 -2px; max-width:50%; min-width:240px; vertical-align:top; width:100%;" class="wrapper">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:240px;" class="wrapper">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="padding: 20px 0 30px 0;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td align="center" bgcolor="#F5F7FA" valign="middle"><a href="http://litmus.com" target="_blank"><img src="{{$imgs->path()}}" width="240" height="130" style="display: block; color: #666666; font-family: Helvetica, arial, sans-serif; font-size: 13px; width: 240px; height: 130px;" alt="Fluid images" border="0" class="img-max"></a></td>
</tr>
<tr>
<td align="center" style="padding: 15px 0 0 0; font-family: Arial, sans-serif; color: #333333; font-size: 20px;" bgcolor="#F5F7FA">{{$noti['titulo']}}</td>
</tr>
<tr>
<td align="center" style="padding: 5px 0 0 0; font-family: Arial, sans-serif; color: #666666; font-size: 14px; line-height: 20px;" bgcolor="#F5F7FA">{!!substr($noti['text'], 0, 200)!!}...</td>
</tr>
<tr>
<td align="center" style="padding: 5px 0 0 0; font-family: Arial, sans-serif; color: #666666; font-size: 14px; line-height: 20px;" bgcolor="#F5F7FA"><a href="{{url('/blog/'.$noti['id'])}}" style="color: #256F9C; text-decoration: none;">Leer Más &rarr;</a></td>
</tr>
</table>
</td>
</tr>
</table>

</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]>
</td>
<td width="20" style="font-size: 1px;">&nbsp;</td>
<td align="right" valign="top" width="240">
<![endif]-->
@endforeach


</td>
</tr>
</table>

<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td bgcolor="#E6E9ED" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-bottom: 20px; max-width: 500px;" class="responsive-table">
<!-- TITLE -->
<tr>
<td align="center" style="padding: 0 0 10px 0; font-size: 25px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding" colspan="2">Próximos Eventos</td>
</tr>
@foreach($eventos as $evento)
<?php $imgs = \App\Models\Upload::find($evento['logo']); ?>
<tr>
<td align="center" height="100%" valign="top" width="100%" colspan="2">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500;">
<tr>
<td align="center" valign="top" style="font-size:0;">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="left" valign="top" width="115">
<![endif]-->
<div style="display:inline-block; margin: 0 -2px; max-width:115px; vertical-align:top; width:100%;">

<table align="left" border="0" cellpadding="0" cellspacing="0" width="115">
<tr>
<td valign="top" style="padding: 40px 0 0 0;" class="mobile-hide"><a href="http://litmus.com" target="_blank"><img src="{{$imgs->path()}}" alt="alt text here" width="105" height="105" border="0" style="display: block; font-family: Arial; color: #666666; font-size: 14px; width: 105px; height: 105px;"></a></td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]>
</td>
<td align="left" valign="top" width="385">
<![endif]-->
<div style="display:inline-block; margin: 0 -2px; max-width:385px; vertical-align:top; width:100%;">

<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>

<td style="padding: 40px 0 0 0;" class="no-padding">
<!-- ARTICLE -->
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td align="left" style="padding: 0 0 5px 25px; font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #aaaaaa;" class="padding-meta">{{$evento['fecha']}}</td>
</tr>
<tr>
<td align="left" style="padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding">{{$evento['titulo']}}</td>
</tr>
<tr>
<td align="left" style="padding: 10px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding">{{$evento['tipo']}}</td>
</tr>
<tr>
<td style="padding:0 0 45px 25px;" align="left" class="padding">
<table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
<tr>
<td align="center">
<!-- BULLETPROOF BUTTON -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="left">
<table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
<tr>
<td align="center" style="border-radius: 3px;" bgcolor="#256F9C"><a href="{{url('/evento/'.$evento['id'])}}" target="_blank" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #256F9C; display: inline-block;" class="mobile-button">Ver Más &rarr;</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
    </td>
</tr>
</table>
</div>
@endforeach
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
</td>
</tr>
<tr>
<td bgcolor="#F5F7FA" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
<tr>
<td>
<!-- TITLE SECTION AND COPY -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333;" class="padding">Inteligencia de Negocios</td>
</tr>
<tr>
<td align="center" style="padding: 20px 0 20px 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding">Informacion Inteligente de Negocios del Mundo.</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" height="100%" valign="top" width="100%">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:500px;">
<tr>
<td align="center" valign="top" style="font-size:0;" class="padding">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="left" valign="top" width="240">
<![endif]-->
@foreach($infografias as $info)
 <?php $imgs = \App\Models\Upload::find($info['blogimg']); ?>
<div style="display:inline-block; margin: 0 -2px; max-width:50%; min-width:240px; vertical-align:top; width:100%;" class="wrapper">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:240px;" class="wrapper">
<tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="padding: 20px 0 30px 0;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td align="center" bgcolor="#F5F7FA" valign="middle"><a href="http://litmus.com" target="_blank"><img src="{{$imgs->path()}}" width="240" height="130" style="display: block; color: #666666; font-family: Helvetica, arial, sans-serif; font-size: 13px; width: 240px; height: 130px;" alt="Fluid images" border="0" class="img-max"></a></td>
</tr>
<tr>
<td align="center" style="padding: 15px 0 0 0; font-family: Arial, sans-serif; color: #333333; font-size: 20px;" bgcolor="#F5F7FA">{{$info['titulo']}}</td>
</tr>
<tr>
<td align="center" style="padding: 5px 0 0 0; font-family: Arial, sans-serif; color: #666666; font-size: 14px; line-height: 20px;" bgcolor="#F5F7FA">{!!substr($info['text'], 0, 200)!!}...</td>
</tr>
<tr>
<td align="center" style="padding: 5px 0 0 0; font-family: Arial, sans-serif; color: #666666; font-size: 14px; line-height: 20px;" bgcolor="#F5F7FA"><a href="{{url('/blog/'.$info['id'])}}" style="color: #256F9C; text-decoration: none;">Ver Más &rarr;</a></td>
</tr>
</table>
</td>
</tr>
</table>

</td>
</tr>
</table>
</div>
<!--[if (gte mso 9)|(IE)]>
</td>
<td width="20" style="font-size: 1px;">&nbsp;</td>
<td align="right" valign="top" width="240">
<![endif]-->
@endforeach


</td>
</tr>
</table>

<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
<tr>
<td bgcolor="#ffffff" align="center" style="padding: 20px 0px;">
<!--[if (gte mso 9)|(IE)]>
<table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
<tr>
<td align="center" valign="top" width="500">
<![endif]-->
<!-- UNSUBSCRIBE COPY -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 500px;" class="responsive-table">
<tr>
<td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
1234 Main Street, Anywhere, MA 01234, USA
<br>
<a href="http://litmus.com" target="_blank" style="color: #666666; text-decoration: none;">Unsubscribe</a>
<span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
<a href="http://litmus.com" target="_blank" style="color: #666666; text-decoration: none;">View this email in your browser</a>
</td>
</tr>
</table>
<!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
</td>
</tr>
</table>
</body>
</html>
