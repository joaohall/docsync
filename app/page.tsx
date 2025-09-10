import { PacientCard, TitleCard } from "@/components/cards";
import Image from "next/image";

export default function Home() {
  return (
    <div className="w-screen py-20 pl-20 pr-4 h-screen overflow-x-hidden">
      <TitleCard />
      <section className="gap-4 flex flex-col">
        <p className="ml-2 opacity-75">Abril</p>
        <div className=" gap-4 flex-wrap flex flex-row">
          <PacientCard />
          <PacientCard />
          <PacientCard />
        </div>
        <div className="w-full bg-black h-[1px] opacity-15 " />
        <p className="ml-2 opacity-75">Agosto</p>
        <div className=" gap-4 flex-wrap flex flex-row">
          <PacientCard />
          <PacientCard />
          <PacientCard />
          <PacientCard />
          <PacientCard />
        </div>
        <div className="w-full bg-black h-[1px] opacity-15 " />
        <p className="ml-2 opacity-75">Setembro</p>

        <div className=" gap-4 flex-wrap flex flex-row">
          <PacientCard />
          <PacientCard />
          <PacientCard />
        </div>
      </section>

    </div>
  );
}
