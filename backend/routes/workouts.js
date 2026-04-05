const express = require('express')
const Workout = require('../models/workoutmodel')
const {
    createWorkout,
    getWorkouts,
    getWorkout,
    deleteWorkout,
    updateWorkout
} = require('../controllers/workoutController')


const router = express.Router()

//get all workouts
router.get('/', getWorkouts)

//get a sinle workout
router.get('/:id',getWorkout)


//POST a new workout
router.post('/', createWorkout)

//DELETE a workout
router.delete('/:id', deleteWorkout)

//UPDATE the workout
router.patch('/:id', updateWorkout)






module.exports = router