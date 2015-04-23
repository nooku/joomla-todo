<?php
/**
 * Created by PhpStorm.
 * User: CAMERON
 * Date: 4/03/2015
 * Time: 4:58 PM
 */
?>
<section id="todoapp">
    <header id="header">
        <h1>todos</h1>
        <input id="new-todo" placeholder="What needs to be done?" autofocus>
    </header>
    <section id="main">
        <input id="toggle-all" type="checkbox">
        <label for="toggle-all">Mark all as complete</label>
        <ul id="todo-list"></ul>
    </section>
    <footer id="footer"></footer>
</section>
<footer id="info">
    <p>Double-click to edit a todo</p>
    <p>Written by <a href="https://github.com/addyosmani">Addy Osmani</a></p>
    <p>Part of <a href="http://todomvc.com">TodoMVC</a></p>
</footer>
<script data-inline type="text/template" id="item-template">
    <div class="view">
        <input class="toggle" type="checkbox" <%= completed ? 'checked' : '' %>>
        <label><%- title %></label>
        <button class="destroy"></button>
    </div>
    <input class="edit" value="<%- title %>">
</script>
<script data-inline type="text/template" id="stats-template">
    <span id="todo-count"><strong><%= remaining %></strong> <%= remaining === 1 ? 'item' : 'items' %> left</span>
    <ul id="filters">
        <li>
            <a class="selected" href="#/">All</a>
        </li>
        <li>
            <a href="#/active">Active</a>
        </li>
        <li>
            <a href="#/completed">Completed</a>
        </li>
    </ul>
    <% if (completed) { %>
    <button id="clear-completed">Clear completed (<%= completed %>)</button>
    <% } %>
</script>
<script data-inline src="media://com_todo/todomvc-common/base.js"></script>
<script data-inline src="media://com_todo/backbone/js/underscore.js"></script>
<script data-inline src="media://com_todo/backbone/js/backbone.js"></script>
<script data-inline>
        Backbone.$.ajaxSetup({

            beforeSend: function(xhr, settings){

                if(settings.data != undefined) {

                    var data = Backbone.$.parseJSON(settings.data);
              //      data.csrf_token = '<?= object('user')->getSession()->getToken() ?>';

                  //  settings.data = JSON.stringify(data);

                }
            }
        });
</script>
<script data-inline src="media://com_todo/backbone/js/models/todo.js"></script>
<script data-inline src="media://com_todo/backbone/js/collections/todos.js"></script>
<script data-inline src="media://com_todo/backbone/js/views/todo-view.js"></script>
<script data-inline src="media://com_todo/backbone/js/views/app-view.js"></script>
<script data-inline src="media://com_todo/backbone/js/routers/router.js"></script>
<script data-inline src="media://com_todo/backbone/js/app.js"></script>

<style src="media://com_todo/todomvc-common/base.css"></style>
<style src="media://com_todo/todomvc-app-css/index.css"></style>