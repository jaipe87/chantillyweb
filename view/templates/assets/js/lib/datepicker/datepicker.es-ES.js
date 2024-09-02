$.fn.datepicker.languages['es-ES'] = {
    format: 'dd/mm/yyyy',
    days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    daysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vie', 'Sab'],
    daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
    months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthsShort: ['En', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    weekStart: 1,
    startView: 0,
    yearFirst: false

};
var $datePicker = $('[data-toggle="datepicker"]').datepicker({
    autoPick: true,
    language: 'es-ES',
    autoHide: true,
    disabled: true
});

$datePicker.attr("readonly",true);