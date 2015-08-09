<?php
$key = "Web Components";
$pageTitle = "HTML 5 Grid Web Components";
$pageDescription = "How to use Agile Grid as a web component";
$pageKeyboards = "HTML 5 Javascript Grid Web Component";
include '../documentation_header.php';
?>

<div>

    <h2>Web Components</h2>

    <p>
        <a href="http://webcomponents.org/">Web Components</a> are reusable user interface widgets that are created using open Web technology. They are
        part of the browser and so they do not need external libraries such as AngularJS or JQuery.
    </p>
    <p>
        Angular Grid presents itself as a web component if such is available from the browser. Web components
        are still not available in all browsers, but you can use libraries to provide polyfills. All the examples
        on this page use <a href="http://cdnjs.com/libraries/webcomponentsjs">webcomponent.js</a> polyfill from Google.
    </p>

    <h4>Using Angular Grid Web Component</h4>

    <p>
        Angular Grid registers as a tag named 'agile-grid' (Angular Grid will renamed to Agile Grid in the
        coming weeks). To insert a grid into you application, use the agile-grid tag and then provide the grid
        options through Javascript.
    </p>

    <p>
        HTML Code:
        <pre><code>&lt;agile-grid id="myAgileGrid">&lt;/agile-grid></code></pre>
        Javascript Code:<br/>
    <pre><code>var myAgileGrid = document.querySelector('#myAgileGrid');
myAgileGrid.setGridOptions(gridOptions);</code></pre>
    </p>

    <h4>Simple Example</h4>

    <p>
        The example below shows a simple grid using Web Components.
    </p>

    <show-example example="example1" example-height="160px"></show-example>

    <h4>Complex Example</h4>

    <p>
        The example below shows a complex grid using Web Components.
    </p>

    <show-example example="webComponentDataGrid"></show-example>

</div>

<?php include '../documentation_footer.php';?>
