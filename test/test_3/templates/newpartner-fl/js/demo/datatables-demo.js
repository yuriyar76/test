// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable(
      {
        "scrollX": true,
        "columnDefs": [
          {
            "targets": [ 2 ],
            "searchable": false
          },
          {
            "targets": [ 8 ],
            "searchable": false
          }
        ],
        "order": [[ 0, "desc" ]],
         "language": {
             "processing": "���������...",
            "search": "�����:",
            "lengthMenu": "�������� _MENU_ �������",
            "info": "������ � _START_ �� _END_ �� _TOTAL_ �������",
            "infoEmpty": "������ � 0 �� 0 �� 0 �������",
            "infoFiltered": "(������������� �� _MAX_ �������)",
            "infoPostFix": "",
            "loadingRecords": "�������� �������...",
            "zeroRecords": "������ �����������.",
            "emptyTable": "� ������� ����������� ������",
            "paginate": {
            "first": "������",
            "previous": "����������",
            "next": "���������",
            "last": "���������"
            },
            "aria": {
              "sortAscending": ": ������������ ��� ���������� ������� �� �����������",
                  "sortDescending": ": ������������ ��� ���������� ������� �� ��������"
            }
  }

      }
  );
});
