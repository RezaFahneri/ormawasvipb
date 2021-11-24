<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Codeigniter Fullcalendar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/fullcalendar/fullcalendar.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">
</head>

<body>


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <?php if ($this->session->userdata('status') == 'Ormawa') { ?>
                                                        <a href="#" class="btn btn-primary add_calendar"> ADD NEW EVENT
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    <?php } else if ($this->session->userdata('status') == 'DPM') { ?>
                                                        <a href="#" class="btn btn-primary add_calendar"> ADD NEW EVENT
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    <?php } ?>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- place -->
                                    <div id="calendarIO"></div>
                                    <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form class="form-horizontal" method="POST" action="POST" id="form_create">
                                                    <input type="hidden" name="calendar_id" value="0">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Create calendar event</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <div class="alert alert-danger" style="display: none;"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-8">Title <span class="required"> * </span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-8">Description</label>
                                                            <div class="col-sm-10">
                                                                <input name="description" rows="3" class="form-control" placeholder="Enter description"></input>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="color" class="col-sm-8 control-label">Color</label>
                                                            <div class="col-sm-10">
                                                                <select name="color" class="form-control">
                                                                    <option value="">Choose</option>
                                                                    <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                                                    <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                                                    <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                                                    <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                                                    <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                                                    <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                                                    <option style="color:#000;" value="#000">&#9724; Black</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-8">Start Date</label>
                                                            <div class="col-sm-10">
                                                                <div class="" data-date-format="yyyy-mm-dd hh:mm" data-date-viewmode="years">
                                                                    <input type="datetime-local" name="start_date" class="form-control" id="startdate">
                                                                    <!-- <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span> -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-8">End Date</label>
                                                            <div class="col-sm-10">
                                                                <div class="" data-date-format="yyyy-mm-dd hh:mm" data-date-viewmode="years">
                                                                    <input type="datetime-local" name="end_date" class="form-control" id="enddate">
                                                                    <!-- <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span> -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo base_url(); ?>jadwal" class="btn default" data-dismiss="modal">Cancel</a>
                                                        <a class="btn btn-danger delete_calendar" style="display: none;">Delete</a>
                                                        <button type="submit" class="btn green">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end place -->
                                    <?php if (($this->session->userdata('status') == 'Ormawa') || ($this->session->userdata('status') == 'DPM')) { ?>
                                        <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form class="form-horizontal" method="POST" action="POST" id="form_edit">
                                                        <input type="hidden" name="calendar_id" value="0">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Edit calendar event</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <div class="alert alert-danger" style="display: none;"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-8">Title <span class="required"> * </span></label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-8">Description</label>
                                                                <div class="col-sm-10">
                                                                    <input name="description" rows="3" class="form-control" placeholder="Enter description"></input>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="color" class="col-sm-8 control-label">Color</label>
                                                                <div class="col-sm-10">
                                                                    <select name="color" class="form-control">
                                                                        <option value="">Choose</option>
                                                                        <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                                                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                                                        <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                                                        <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                                                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                                                        <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                                                        <option style="color:#000;" value="#000">&#9724; Black</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-lg-6">Start Date</label>
                                                                <div class="col-sm-10">
                                                                    <div class="" data-date-format="yyyy-mm-dd hh:mm" data-date-viewmode="years">
                                                                        <input type="datetime-local" name="start_date" class="form-control" id="startdate">
                                                                        <!-- <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span> -->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-lg-6">End Date</label>
                                                                <div class="col-sm-10">
                                                                    <div class="" data-date-format="yyyy-mm-dd hh:mm" data-date-viewmode="years">
                                                                        <input type="datetime-local" name="end_date" class="form-control" id="enddate">
                                                                        <!-- <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span> -->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="<?php echo base_url(); ?>jadwal" class="btn default" data-dismiss="modal">Cancel</a>
                                                            <a class="btn delete_calendar" style="display: none;">Delete</a>
                                                            <button type="submit" class="btn green">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- end place -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Ormawa Sekolah Vokasi IPB 2021.</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/moment.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/fullcalendar/fullcalendar.js'; ?>"></script>
    <script type="text/javascript">
        var get_data = '<?php echo $get_data; ?>';
        var backend_url = '<?php echo base_url(); ?>';

        $(document).ready(function() {
            $('.date-picker').datepicker();
            $('#calendarIO').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: moment().format('YYYY-MM-DD hh:mm'),
                editable: true,
                eventLimit: false, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                // FUNGSI KALO MENCET KALENDER MUNCUL 'MODAL'
                // select: function(start, end) {
                //     $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                //     $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                //     $('#create_modal').modal('show');
                //     save();
                //     $('#calendarIO').fullCalendar('unselect');
                // },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    editDropResize(event);
                },
                eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
                    editDropResize(event);
                },
                eventClick: function(event, element) {
                    deteil(event);
                    editData(event);
                    deleteData(event);
                },
                events: JSON.parse(get_data)
            });
        });

        $(document).on('click', '.add_calendar', function() {
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');
        })

        $(document).on('submit', '#form_create', function() {

            var element = $(this);
            var eventData;
            $.ajax({
                url: backend_url + 'jadwal/save',
                type: element.attr('method'),
                data: element.serialize(),
                dataType: 'JSON',
                beforeSend: function() {
                    element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                },
                success: function(data) {
                    if (data.status) {
                        eventData = {
                            id: data.id,
                            title: $('#create_modal input[name=title]').val(),
                            description: $('#create_modal input[name=description]').val(),
                            start: moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            end: moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            color: $('#create_modal select[name=color]').val()
                        };
                        $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                        $('#create_modal').modal('hide');
                        element[0].reset();
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                    } else {
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html(data.notif);
                    }
                    element.find('button[type=submit]').html('Submit');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    element.find('button[type=submit]').html('Submit');
                    element.find('.alert').css('display', 'block');
                    element.find('.alert').html('Wrong server, please save again');
                }
            });
            return false;
        })

        function editDropResize(event) {
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if (event.end) {
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            } else {
                end = start;
            }

            $.ajax({
                url: backend_url + 'jadwal/save',
                type: 'POST',
                data: 'calendar_id=' + event.id + '&title=' + event.title + '&start_date=' + start + '&end_date=' + end,
                dataType: 'JSON',
                beforeSend: function() {},
                success: function(data) {
                    if (data.status) {
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
                    } else {
                        $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
                }
            });
        }

        function save() {
            $('#form_create').submit(function() {
                var element = $(this);
                var eventData;
                $.ajax({
                    url: backend_url + 'jadwal/save',
                    type: element.attr('method'),
                    data: element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function() {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data) {
                        if (data.status) {
                            eventData = {
                                id: data.id,
                                title: $('#create_modal input[name=title]').val(),
                                description: $('#create_modal input[name=description]').val(),
                                start: moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                end: moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                color: $('#create_modal select[name=color]').val()
                            };
                            $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        } else {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    // error: function(jqXHR, textStatus, errorThrown) {
                    //     element.find('button[type=submit]').html('Submit');
                    //     element.find('.alert').css('display', 'block');
                    //     element.find('.alert').html('Wrong server, please save again');
                    // }
                });
                return false;
            })
        }

        function deteil(event) {
            $('#edit_modal input[name=calendar_id]').val(event.id);
            $('#edit_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
            $('#edit_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
            $('#edit_modal input[name=title]').val(event.title);
            $('#edit_modal input[name=description]').val(event.description);
            $('#edit_modal select[name=color]').val(event.color);
            $('#edit_modal .delete_calendar').show();
            $('#edit_modal').modal('show');
        }

        function editData(event) {
            $('#form_edit').submit(function() {
                var element = $(this);
                var eventData;
                $.ajax({
                    url: backend_url + 'jadwal/save',
                    type: element.attr('method'),
                    data: element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function() {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data) {
                        if (data.status) {
                            event.title = $('#edit_modal input[name=title]').val();
                            event.description = $('#edit_modal input[name=description]').val();
                            event.start = moment($('#edit_modal input[name=start_date]').val()).format('YYYY-MM-DD hh:mm');
                            event.end = moment($('#edit_modal input[name=end_date]').val()).format('YYYY-MM-DD hh:mm');
                            event.color = $('#edit_modal select[name=color]').val();
                            $('#calendarIO').fullCalendar('updateEvent', event);

                            $('#edit_modal').modal('hide');
                            element[0].reset();
                            $('#edit_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        } else {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },

                });
                return false;
            })
        }

        function deleteData(event) {
            $('#edit_modal .delete_calendar').click(function() {
                $.ajax({
                    url: backend_url + 'jadwal/delete',
                    type: 'POST',
                    data: 'id=' + event.id,
                    dataType: 'JSON',
                    beforeSend: function() {},
                    success: function(data) {
                        if (data.status) {
                            $('#calendarIO').fullCalendar('removeEvents', event._id);
                            $('#edit_modal').modal('hide');
                            $('#form_edit')[0].reset();
                            $('#edit_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        } else {
                            $('#form_edit').find('.alert').css('display', 'block');
                            $('#form_edit').find('.alert').html(data.notif);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#form_edit').find('.alert').css('display', 'block');
                        $('#form_edit').find('.alert').html('Wrong server, please save again');
                    }
                });
            })
        }
    </script>
</body>

</html>