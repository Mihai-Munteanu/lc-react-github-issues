import React from 'react'
import { Link, Route, BrowserRouter as Router, Switch } from 'react-router-dom'
import Details from './Details'
import Issues from './Issues'

export default function App() {
     return (
          <Router>
               <>
                    <nav>
                         <ul>
                              <li>
                                   <Link to="/">Home</Link>
                              </li>
                         </ul>
                    </nav>
                    <div className='container'>
                         <Switch>
                              <Route exact path="/">
                                   <Issues />
                              </Route>
                              <Route path="/issues/:id">
                                   <Details />
                              </Route>
                         </Switch>
                    </div>
               </>
          </Router>
     )
}
