// cara class

var editors = document.querySelectorAll(".editor");
editors.forEach(function(editorElem) {
    var editor = ace.edit(editorElem);
    editor.setTheme("ace/theme/xcode");
    editor.getSession().setMode("ace/mode/c_cpp");
    editor.setOptions({
        minLines: 8,
        maxLines: Infinity
    });
});

// cara id
// var editor = document.querySelector("#editor");

// ace.edit(editor, {
//     theme: 'ace/theme/xcode',
//     mode: 'ace/mode/c_cpp',
//     enableBasicAutocompletion: true
// })

// var editor = ace.edit("editor");

// editor.setOptions({
//     minLines: 8,
//     maxLines: Infinity
// });

document.getElementById("myform").addEventListener("submit", function(e) {
    var code = ace.edit("editor").getValue();
    document.getElementById("code").value = code;
});