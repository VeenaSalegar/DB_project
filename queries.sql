/*to get the location with max number of events held*/
create view tab2 as select event_id, location from event_for_fest;
create view tab3 as select eventc_id, location from event_for_club;
select location, count(location) from ((select * from tab2) union (select * from tab3)) as unitab group by location;


/* get the users names and ids who have attended max events*/
create view tab4 as select user_id, event_id from ((select user_id, event_id from ticket_fest) union (select user_id, eventc_id from ticket_club)) as newtab; 
select u.name, t.user_id from (select * from (select user_id, count(user_id) as co from tab4 group by user_id) as y order by co desc) as t, usertable u where co = (select co from (select user_id, count(user_id) as co from tab4 group by user_id) as y order by co desc limit 1) and t.user_id = u.user_id; 


/*most popular event*/
create view tab5 as select user_id, event_id, college_id from ((select user_id, event_id, college_id from ticket_fest) union (select user_id, eventc_id, college_id from ticket_club)) as newtab; 
select e.name from (select * from (select event_id, college_id, count(event_id) as cox from tab5 group by event_id, college_id) as y order by cox desc) as t, ((select event_id, name from event_for_fest f) union (select eventc_id, name from event_for_club c)) as e where cox = (select cox from (select event_id, count(event_id) as cox from tab5 group by event_id) as y order by cox desc limit 1) and t.event_id = e.event_id;

/*generation of people attending events*/
 select extract(year from (age('2016-01-01',f.DOB))), f.event_id from (select u.user_id, u.DOB, e.event_id from usertable u, ((select * from ticket_fest) union (select * from ticket_club)) as e where u.user_id = e.user_id) as f group by f.event_id, f.DOB;

/*most popular event(altered)*/
create view tab5 as select user_id, event_id, college_id from ((select user_id, event_id, college_id from ticket_fest) union (select user_id, eventc_id, college_id from ticket_club)) as newtab; 
select e.name, t.event_id from (select * from (select event_id, college_id, count(event_id) as cox from tab5 group by event_id, college_id) as y order by cox desc) as t, ((select f.event_id, f.name, fs.college_id from event_for_fest f , fest fs where fs.fest_id=f.fest_id) union (select eventc_id, name, c.college_id from event_for_club c)) as e where cox = (select cox from (select event_id, count(event_id) as cox from tab5 group by event_id) as y order by cox desc limit 1) and t.event_id = e.event_id and t.college_id = e.college_id; 

