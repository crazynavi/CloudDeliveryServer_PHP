'use strict';

// Class definition
var KTDualListbox = function () {
    // Private functions
    var demo1 = function () {
        // Dual Listbox
        var $this = $('#kt_dual_listbox_1');

        // get options
        var options = [];
        $this.children('option').each(function () {
            var value = $(this).val();
            var label = $(this).text();
            options.push({
                text: label,
                value: value
            });
        });

        // init dual listbox
        var dualListBox = new DualListbox($this.get(0), {
            addEvent: function (value) {
                console.log(value);
            },
            removeEvent: function (value) {
                console.log(value);
            },
            availableTitle: 'Available options',
            selectedTitle: 'Selected options',
            addButtonText: 'Add',
            removeButtonText: 'Remove',
            addAllButtonText: 'Add All',
            removeAllButtonText: 'Remove All',
            options: options,
        });
    };

    var demo2 = function () {
        // Dual Listbox
        var $this = $('#kt_dual_listbox_2');

        // get options
        var options = [];
        $this.children('option').each(function () {
            var value = $(this).val();
            var label = $(this).text();
            options.push({
                text: label,
                value: value
            });
        });

        // init dual listbox
        var dualListBox = new DualListbox($this.get(0), {
            addEvent: function (value) {
                console.log(value);
            },
            removeEvent: function (value) {
                console.log(value);
            },
            availableTitle: "Source Options",
            selectedTitle: "Destination Options",
            addButtonText: "<i class='flaticon2-next'></i>",
            removeButtonText: "<i class='flaticon2-back'></i>",
            addAllButtonText: "<i class='flaticon2-fast-next'></i>",
            removeAllButtonText: "<i class='flaticon2-fast-back'></i>",
            options: options,
        });
    };

    var demo3 = function () {
        // Dual Listbox
        var $this = $('#kt_dual_listbox_3');

        // get options
        var options = [];
        $this.children('option').each(function () {
            var value = $(this).val();
            var label = $(this).text();
            options.push({
                text: label,
                value: value
            });
        });

        // init dual listbox
        var dualListBox = new DualListbox($this.get(0), {
            addEvent: function (value) {
                console.log(value);
            },
            removeEvent: function (value) {
                console.log(value);
            },
            availableTitle: 'Available options',
            selectedTitle: 'Selected options',
            addButtonText: 'Add',
            removeButtonText: 'Remove',
            addAllButtonText: 'Add All',
            removeAllButtonText: 'Remove All',
            options: options,
        });
    };

    var demo4 = function () {
        // Dual Listbox
        var $this = $('#kt_dual_listbox_4');

        // get options
        var options = [];
        $this.children('option').each(function () {
            var value = $(this).val();
            var label = $(this).text();
            options.push({
                text: label,
                value: value
            });
        });

        // init dual listbox
        var dualListBox = new DualListbox($this.get(0), {
            addEvent: function (value) {
                console.log(value);
            },
            removeEvent: function (value) {
                console.log(value);
            },
            availableTitle: 'Available options',
            selectedTitle: 'Selected options',
            addButtonText: 'Add',
            removeButtonText: 'Remove',
            addAllButtonText: 'Add All',
            removeAllButtonText: 'Remove All',
            options: options,
        });

        // hide search
        dualListBox.search.classList.add('dual-listbox__search--hidden');
    };

    return {
        // public functions
        init: function () {
            demo1();
            demo2();
            demo3();
            demo4();
        },
    };
}();

jQuery(document).ready(function () {
    KTDualListbox.init();
});
