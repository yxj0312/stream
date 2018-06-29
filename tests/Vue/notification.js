import Vue from 'vue';
import test from 'ava';
// import Notification from '.../resources/assets/js/testing/Notification.js';
import Notification from './Notification.js';


test('that it renders a notification', t => {
    // console.log('123');
    t.is(Notification.data().message, 'Hello World');
})