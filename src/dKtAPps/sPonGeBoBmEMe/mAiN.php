<?pHp

nAmESpAcE dKtAPps\sPonGeBoBmEMe;

UsE pocketmine\event\Listener;
uSe pocketmine\event\player\PlayerChatEvent;
uSE pocketmine\plugin\PluginBase;

ClAss mAiN eXtEnDs pLuGiNbAsE iMPlEmENtS liSTeNeR {

	pUbLIc FuNcTIOn ONeNaBLe(){
		$this->gEtSeRVeR()->gEtpLuGInmANaGeR()->ReGIsTeReVeNts($this, $this);
	}

	pUbLIc FuNcTIOn OnpLaYErcHAt(pLAyErcHaTeVeNT $eV){
		$mEssAgE = StR_SPlIT($eV->gEtmESsAgE());
		foReAcH($mEssAgE aS $K => $ChAR){
			$ChAR = StRtOLoWEr($ChAR);
			if(mT_RaND(0, 1) === 1){
				$ChAR = StRToUpPeR($ChAR);
			}

			$mEssAgE[$K] = $ChAR;
		}

		$eV->sEtmESsAgE(ImPLoDe('', $mEssAgE));
	}
}
