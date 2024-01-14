import React from "react";
import { Link, Head } from "@inertiajs/react";

export default function Homepage (props) {
    return (
        <div className="flex justify-center items-center text-3xl min-h-screen text-red-500 bg-slate-800">
            <Head title={props.title}/>
            <p>{props.description}</p>
        </div>
    )
}